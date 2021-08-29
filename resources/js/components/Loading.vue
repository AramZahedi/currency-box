<template>
    <div class="dark-overlay" v-cloak v-show="show">
        <ul class="loading d-block">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show: false,
                percent: 0,
                element: jQuery(this.$el),
                container_loader: null
            }
        },

        created() {
            window.events.$on('show-loading', () => {
                this.load();
            });

            window.events.$on('hide-loading', () => {
                this.hide()
            });
        },

        methods: {
            load() {
                if (!this.show) {
                    jQuery(this.$el).hide();

                    this.show = true;

                    jQuery(this.$el).fadeIn(200);
                }
            },

            hide() {
                if (this.show) {
                    setTimeout(() => {
                        this.show = false;
                    }, 200);

                    jQuery(this.$el).fadeOut(200);
                }
            },
        }
    }
</script>
