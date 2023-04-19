<template>
    <div>

        <button id="newsletterId" type="button" class="btn btn-primary d-none" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md">
                <div class="modal-content">
                    <div class="modal-header py-5">
                        <h4 class="modal-title" id="exampleModalLabel">Sign up to our newsletter</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="add-comments">

                            <div v-show="!signedup" class="content">
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolore molestiae expedita iusto
                                    nemo facere vitae magnam reiciendis! Natus, magnam? Quo nulla rem ea aliquid possimus
                                    facere quibusdam distinctio eos dicta.</p>
                                <div class="inner-add-comments form-contact-2">
                                    <div class="">
                                        <div class="col-md-12 inner-add-comments-box">
                                            <input type="text" v-model="name" placeholder="Name" required>
                                        </div>
                                        <div class="col-md-12 inner-add-comments-box">
                                            <input type="email" v-model="email" placeholder="Email" required>
                                        </div>


                                        <div class="col-md-12 inner-add-comments-box last">
                                            <button class="btn-1 btn-3 submit col-12" @click="registerLead()"><span>{{
                                                loading ? 'Signing you up...' : 'Submit' }}</span></button>
                                            <span class="out-message"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="py-5">
                                <h6 class="text-center">Thank you for signing up to our newsletter.</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {

            name: null,
            email: null,
            loading: false,
            signedup: false


        }
    },
    props: ['apiurl'],

    methods: {
        registerLead() {

            if (this.email == null || this.name == null) {
                alert('Please supply your name and email.')
            } else {

                this.loading = true
                axios({
                    url: this.apiurl + 'api/news-letter-signup',
                    method: 'post',
                    data: {
                        name: this.name,
                        email: this.email
                    }
                })
                    .then((response) => {

                        this.loading = false

                        console.log(response);

                        localStorage.setItem('registeredLead', true)

                        this.signedup = true
                    })
                    .catch((response) => {
                        console.log(response);


                    })

            }

            // alert(this.apiurl)


        }
    },
    mounted() {
        console.log('Component mounted.')

        if (localStorage.getItem('registeredLead') == null) {

            setTimeout(() => {

                document.getElementById("newsletterId").click()

            }, 10000);
        }
    }
}
</script>
