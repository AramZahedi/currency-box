<template>
    <canvas height="600px"
            ref="canvas"></canvas>
</template>
<script>
import Chart from 'chart.js/auto';

export default {
    name: "Chart",

    props: [],

    data() {
        return {
            chart: null,
            labels: [],
            datasets: [],
        }
    },

    created() {
    },

    async mounted() {
        await this.$parent.fetch();

        let canvas = this.$refs.canvas;

        this.renderChart(canvas);
    },

    computed: {},

    methods: {
        /**
         * Update the datasets for the chart
         *
         * @param datasets
         */
        updateDatasets(datasets) {
            this.datasets = datasets;
        },

        /**
         * Update the labels on the chart
         *
         * @param labels
         */
        updateLabels(labels) {
            this.labels = labels;
        },

        /**
         * Get the chart data to render the chart
         *
         * @returns {{datasets: [], labels: []}}
         */
        chartData() {
            return {
                labels: this.labels,
                datasets: this.datasets
            }
        },

        /**
         * Get the options for rendering the chart
         *
         * @returns {{scales: {x: {display: boolean, title: {display: boolean}}, y: {display: boolean, title: {display: boolean, text: string}}}}}
         */
        chartOptions() {
            return {
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value'
                        },
                    }
                },

                elements: {
                    point: {
                        radius: 7,
                        hoverRadius: 10
                    }
                }
            }
        },

        /**
         * Render the chart for the first time based
         * on the data and options
         *
         * @param canvas
         */
        renderChart(canvas) {
            this.chart = new Chart(canvas, {
                type: 'line',
                data: this.chartData(),
                options: this.chartOptions()
            });
        },

        /**
         * Update the chart
         */
        updateChart() {
            this.chart.data.datasets = this.datasets;
            this.chart.data.labels = this.labels;

            this.chart.update();
        },
    }
}
</script>
