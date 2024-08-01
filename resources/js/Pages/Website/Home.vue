<template>
    <website-layout>
        <section class="main-slider-one">
            <div class="main-slider-one__carousel alefox-owl__carousel owl-carousel" ref="owlCarousel">
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="container">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title">
                                    <span class="sec-title__tagline__left-leaf"
                                        :style="{ backgroundImage: `url(${publicPath}assets/images/shapes/leaf.png)` }"></span>Wellcome
                                    to <span>Alefox !</span>
                                </h5>
                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__leaf"
                                        :style="{ backgroundImage: `url(${publicPath}assets/images/shapes/slider-1-leaf.png)` }"></span>We
                                    Organic Food<br />Agricultue Healthy.
                                </h2>
                                <p class="main-slider-one__text">
                                    Poor can only be as strong as our people & because of team<br />have
                                    designed game changing products.
                                </p>
                                <div class="main-slider-one__btn">
                                    <Link href="/about" class="alefox-btn">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        Discover More
                                    
                                    </Link>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer"
                            :style="{ backgroundImage: `url(${publicPath}assets/images/backgrounds/slider-1-1.jpg)` }">
                        </div>
                        <div class="main-slider-one__shape-one">
                            <img :src="`${publicPath}assets/images/shapes/slider-1-shape-1.png`" alt="alefox" />
                        </div>
                        <div class="main-slider-one__shape-two">
                            <img :src="`${publicPath}assets/images/shapes/slider-1-shape-2.png`" alt="alefox" />
                        </div>
                        <div class="main-slider-one__shape-three">
                            <img :src="`${publicPath}assets/images/shapes/slider-1-shape-3.png`" alt="alefox" />
                        </div>
                        <div class="main-slider-one__discount"><span>25%</span>Discounts</div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="container">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title"><span class="sec-title__tagline__left-leaf"
                                        style="background-image: url(assets/images/shapes/leaf.png);"></span>Wellcome to
                                    <span>Alefox !</span>
                                </h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__leaf"
                                        style="background-image: url(assets/images/shapes/slider-1-leaf.png);"></span>
                                    We Organic Food<br> Agricultue Healthy.
                                </h2><!-- slider-title -->
                                <p class="main-slider-one__text">
                                    Poor can only be as strong as our people & because of team<br> have designed game
                                    changing products.
                                </p>
                                <div class="main-slider-one__btn">
                                    <Link href="/about" class="alefox-btn">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        Discover More
                                    
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer"
                            style="background-image: url(assets/images/backgrounds/slider-1-2.jpg);">
                        </div><!-- right-image -->
                        <div class="main-slider-one__shape-one"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-1.png`" alt="alefox">
                        </div><!-- shape-one -->
                        <div class="main-slider-one__shape-two"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-2.png`" alt="alefox">
                        </div><!-- shape-two -->
                        <div class="main-slider-one__shape-three"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-3.png`" alt="alefox">
                        </div><!-- shape-one -->
                        <div class="main-slider-one__discount"><span>25%</span>Discounts</div>
                    </div>
                </div>
                <div class="item">
                    <div class="main-slider-one__item">
                        <div class="container">
                            <div class="main-slider-one__content">
                                <h5 class="main-slider-one__sub-title"><span class="sec-title__tagline__left-leaf"
                                        style="background-image: url(assets/images/shapes/leaf.png);"></span>Wellcome to
                                    <span>Alefox !</span>
                                </h5>
                                <!-- slider-sub-title -->
                                <h2 class="main-slider-one__title">
                                    <span class="main-slider-one__title__leaf"
                                        style="background-image: url(assets/images/shapes/slider-1-leaf.png);"></span>
                                    We Organic Food<br> Agricultue Healthy.
                                </h2><!-- slider-title -->
                                <p class="main-slider-one__text">
                                    Poor can only be as strong as our people & because of team<br> have designed game
                                    changing products.
                                </p>
                                <div class="main-slider-one__btn">
                                    <Link href="/about" class="alefox-btn">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        Discover More
                                    
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <div class="main-slider-one__layer"
                            style="background-image: url(assets/images/backgrounds/slider-1-3.jpg);">
                        </div><!-- right-image -->
                        <div class="main-slider-one__shape-one"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-1.png`" alt="alefox">
                        </div><!-- shape-one -->
                        <div class="main-slider-one__shape-two"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-2.png`" alt="alefox">
                        </div><!-- shape-two -->
                        <div class="main-slider-one__shape-three"><img
                                :src="`${publicPath}assets/images/shapes/slider-1-shape-3.png`" alt="alefox">
                        </div><!-- shape-one -->
                        <div class="main-slider-one__discount"><span>25%</span>Discounts</div>
                    </div>
                </div>
                <!-- Repeat for other items -->
            </div>
        </section>

        <section class="blog-one">
            <div class="container">
                <div class="sec-title text-center">
                    <h6 class="sec-title__tagline">
                        <span class="sec-title__tagline__left-leaf"
                            :style="{ backgroundImage: `url(${publicPath}assets/images/shapes/leaf.png)` }"></span>
                        From the Blog
                        <span class="sec-title__tagline__right-leaf"
                            :style="{ backgroundImage: `url(${publicPath}assets/images/shapes/leaf.png)` }"></span>
                    </h6>
                    <h3 class="sec-title__title">Latest News & Articles</h3>
                </div>
                <div class="blog-one__carousel alefox-owl__carousel alefox-owl__carousel--with-shadow alefox-owl__carousel--basic-nav owl-carousel owl-theme"
                    ref="blogCarousel">
                    <div v-for="blog in blogs" :key="blog.blog_id" class="item">
                        <div class="blog-card wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                            <div class="blog-card__image">
                                <img :src="`${publicPath}storage/${blog.image}`" :alt="blog.title" />
                                <a href="" class="blog-card__image__link">
                                    <span class="sr-only">{{ blog.title }}</span>
                                </a>
                            </div>
                            <div class="blog-card__content">
                                <h3 class="blog-card__title">
                                    <a href="#">{{ blog.title }}</a>
                                </h3>
                                <p class="blog-card__text">{{ blog.content.substring(0, 100) }}...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </website-layout>
</template>

<script>
import WebsiteLayout from '@/Layouts/WebsiteLayout.vue';
import { Link } from '@inertiajs/vue3';

export default {
    name: 'Home',
    components: {
        WebsiteLayout,
        Link,
    },
    props: {
        blogs: Object
    },
    data() {
        return {
            publicPath: import.meta.env.VITE_APP_URL || '/', // Use environment variable or default to root

        };
    },
    mounted() {
        this.initializeCarousel();
        this.initializeCategoryCarousel();
        this.initializeBlogCarousel();
    },
    methods: {
        initializeCarousel() {
            $(this.$refs.owlCarousel).owlCarousel({
                loop: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items: 1,
                autoplay: true,
                autoplayTimeout: 7000,
                smartSpeed: 10,
                nav: false,
                navText: [
                    '<span class="icon-left-arrow"></span>',
                    '<span class="icon-right-arrow"></span>',
                ],
                dots: true,
                margin: 0,
            });
        },
        initializeCategoryCarousel() {
            $(this.$refs.categoryCarousel).owlCarousel({
                items: 1,
                margin: 30,
                loop: false,
                smartSpeed: 700,
                nav: false,
                navText: [
                    '<span class="icofont-bubble-left"></span>',
                    '<span class="icofont-bubble-right"></span>',
                ],
                dots: false,
                autoplay: false,
                responsive: {
                    0: { items: 1 },
                    500: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 },
                    1200: { items: 5 },
                },
            });
        },
        initializeBlogCarousel() {
            $(this.$refs.blogCarousel).owlCarousel({
                items: 1,
                margin: 30,
                loop: false,
                smartSpeed: 700,
                nav: false,
                navText: [
                    '<span class="icofont-bubble-left"></span>',
                    '<span class="icofont-bubble-right"></span>',
                ],
                dots: false,
                autoplay: false,
                responsive: {
                    0: { items: 1 },
                    768: { items: 2 },
                    992: { items: 3 },
                },

            });
        }
    },
};
</script>


<style scoped>
.blog-card__image {
    position: relative;
}

.blog-card__image img {
    width: 286px;
    height: 202px;
    object-fit: cover; /* Ensures the image covers the dimensions without distortion */
}
</style>
