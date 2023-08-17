<template>
    <div>
        <section id="hero" class="hero d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center"
                    >
                        <h5>Hello, I am</h5>
                        <h1 data-aos="fade-up">Douglas Rono</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">
                            I’m a software engineer specializing in building
                            (and occasionally designing) exceptional digital
                            experiences.
                        </h2>
                        <div data-aos="fade-up" data-aos-delay="600">
                            <div class="text-center text-lg-start">
                                <a
                                    href="#about"
                                    class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center"
                                >
                                    <span>Read more</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div
                        class="col-lg-6 hero-img"
                        data-aos="zoom-out"
                        data-aos-delay="200"
                    >
                        <img
                            src="assets/img/prof.png"
                            class="img-fluid"
                            alt=""
                        />
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div
                        class="col-lg-6 hero-img"
                        data-aos="zoom-out"
                        data-aos-delay="200"
                    >
                        <img
                            src="assets/img/profile.jpg"
                            class="img-fluid rounded"
                            alt=""
                        />
                    </div>
                    <div
                        class="col-lg-6 d-flex flex-column justify-content-center"
                    >
                        <h1 data-aos="fade-up">ABOUT</h1>
                        <h2 data-aos="fade-up" data-aos-delay="400">
                            I am Douglas Rono, a passionate software developer
                            from Nairobi, Kenya, bringing you programming and
                            design from the future. My expertise is developing
                            top-level websites and web applications including
                            moble application.
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="container">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <ul
                            class="list-unstyled d-flex flex-wrap justify-content-center p-4"
                        >
                            <li class="mx-3 my-2"><a href="/">Home</a></li>
                            <li class="mx-3 my-2"><a href="#">Skills</a></li>
                            <li class="mx-3 my-2"><a href="#">Portfolio</a></li>
                            <li class="mx-3 my-2"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <hr />
                <div class="d-flex justify-content-center p-3">
                    <a href="" class="mx-3 my-2">
                        <i class="bi bi-github"></i
                    ></a>
                    <a href="" class="mx-3 my-2">
                        <i class="bi bi-linkedin"></i
                    ></a>
                    <a href="" class="mx-3 my-2">
                        <i class="bi bi-twitter"></i
                    ></a>
                </div>
                <div class="container">
                    <div class="copyright text-center">
                        &copy; 2023 . All Rights Reserved By <span class="text-success"> {{ 'Douglas Rono' }}</span>
                        <strong>
                            <span></span></strong
                        >
                    </div>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    mounted() {},
    created() {},
    methods: {},
};
</script>
