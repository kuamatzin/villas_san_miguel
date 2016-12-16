<script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' };
    new Vue({
        el: "#contacto",
        data: {
            errors: '',
            name: '',
            email: '',
            message: '',
            phone: '',
            nss: '',
            birthday: ''
        },
        methods: {
            contacto: function(){
                var that = this;
                this.$http.get('/enviar_email/?name=' + this.name + '&email=' + this.email + '&phone=' + this.phone + '&message=' + this.message + '&nss=' + this.nss + '&birthday=' + this.birthday).then(function(response){
                    if (response.body == 'Exito') {
                        alert("Enseguida nos pondremos en contacto contigo")
                        that.name = ''
                        that.email = ''
                        that.phone = ''
                        that.message = ''
                        that.nss = ''
                        that.birthday = ''
                    }
                    else {
                        that.errors = response.body;
                    }
                }, function(error){

                })
            }
        }
    })
</script>