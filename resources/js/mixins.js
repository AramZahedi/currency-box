Vue.mixin({
    methods: {
        fail: function () {
            this.$snotify.error('An error occurred while processing your request.', 'Fail!', {
                timeout: 5000
            });
        },

        success: function (message, timeout = null) {
            this.$snotify.success(message, 'Success!', {
                timeout: 5000
            });
        },

        confirm: function (callback, message = null, title = null) {
            Swal.fire({
                title: title ? title : 'Are you sure?!',
                text: message ? message : 'Are you sure you want to proceed with this request? This cannot be undone.',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#0abee3',
                confirmButtonText: 'Yes, Sure!',
                cancelButtonText: 'Cancel',
                focusCancel: true,
                reverseButtons: true,
            }).then((result) => {
                if (result.value) {
                    callback();
                }
            })
        },
    }
});
