<template>
    <div>
        <div style="background-color: #eaeaea"
             class="d-flex align-items-center px-3 py-2">
            <span class="flex-shrink-0 mr-2">
                Choose Date:
            </span>

            <input type="text" name="date"
                   style="width: 300px; max-width: 70%;"
                   class="form-control bg-light"
                   :value="today"
                   readonly
                   ref="datepicker">

            <!--            <span class="d-inline-block ml-3 font-weight-bold">-->
            <!--                {{ date }}-->
            <!--            </span>-->
        </div>

        <div class="mt-3"></div>

        <div style="background-color: #eaeaea"
             class="p-3">
            <chart id="currencies_chart" ref="chart"
                   class="w-100"></chart>
        </div>
    </div>
</template>

<script>
export default {
    name: "CurrenciesChart",

    props: [
        'today'
    ],

    data() {
        return {
            datasets: [],
            labels: [],

            date: null,

            currencies: {
                usd: null,
                eur: null,
                gbp: null,
                aed: null,
                cny: null,
            },

            colors: {
                usd: '#17a2b8',
                eur: '#ea6360',
                gbp: '#007bff',
                aed: '#28a745',
                cny: '#ffc107',
            }
        }
    },

    created() {
        this.date = this.today;
    },

    mounted() {
        this.initializeDatepicker();
    },

    computed: {
        /**
         * Get the chart element
         *
         * @returns {any}
         */
        chart() {
            return this.$refs.chart;
        }
    },

    watch: {},

    methods: {
        /**
         * Fetch the currencies chart data from the backend
         * and update the chart
         */
        async fetch() {
            return new Promise((resolve, reject) => {
                showLoading();

                axios.get(`/dashboard/chart?date=${this.date}`)
                    .then((response) => {
                        this.update(response.data.data);

                        resolve();
                    })
                    .catch((error) => {
                    })
                    .then(() => {
                        hideLoading();
                    })
            })
        },

        /**
         * Update the details (labels, values, chart etc)
         *
         * @param data
         */
        update(data) {
            this.updateCurrencies(data.currencies);

            this.updateLabels(data.labels);

            this.updateDatasets();

            this.updateChart();
        },

        /**
         * Update the currencies based on the response from the backend
         *
         * @param labels
         */
        updateLabels(labels) {
            this.labels = labels;
        },

        /**
         * Update the currencies based on the response from the backend
         *
         * @param currencies
         */
        updateCurrencies(currencies) {
            Object.keys(currencies).forEach((key) => {
                this.currencies[key] = currencies[key];
            })
        },

        /**
         * Update the chart based on the fetched data
         */
        updateChart() {
            this.chart.updateLabels(this.labels);
            this.chart.updateDatasets(this.datasets);
        },

        /**
         * Update the datasets to pass to the chart
         * bases on the fetched labels and values
         */
        updateDatasets() {
            let datasets = [];

            Object.keys(this.currencies).forEach((key) => {
                datasets.push(
                    this.generateDataset(key, this.currencies[key])
                );
            });

            this.datasets = datasets;
        },

        /**
         * Generate a single dataset based on the given
         * currency name and values
         *
         * @param currency
         * @param values
         * @returns {[{backgroundColor: string, borderColor: string, tension: number, data, label, fill: boolean, pointRadius: number, cubicInterpolationMode: string}]}
         */
        generateDataset(currency, values) {
            return {
                label: currency.toUpperCase(),
                data: values,
                backgroundColor: this.colors[currency],
                borderColor: this.colors[currency],
                fill: false,
                cubicInterpolationMode: 'monotone',
                tension: 0.4
            };
        },

        /**
         * Initialize the datepicker element
         *
         * @return void
         */
        initializeDatepicker() {
            jQuery(this.$refs.datepicker)
                .datepicker({
                    language: 'en',
                    todayButton: new Date(this.today),
                    dateFormat: 'yyyy-M-dd',
                    autoClose: true,
                    toggleSelected: false,
                    onSelect: (formatted_date) => {
                        return this.selectNewDate(formatted_date);
                    }
                })
        },

        /**
         * The method to trigger when a new date is
         * selected from the datepicker
         *
         * @param date
         */
        async selectNewDate(date) {
            if (date === this.date) return;

            this.date = date;

            await this.fetch();

            this.chart.updateChart();
        },
    },
}
</script>
