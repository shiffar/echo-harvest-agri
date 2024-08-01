<template>
    <footer>
      <footer class="main-footer background-black">
        <div class="main-footer__bg background-black"
          style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
        <!-- /.main-footer__bg -->
        <div class="main-footer__top">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-xl-4">
                <div class="footer-widget footer-widget--about">
                  <Link href="/"  class="footer-widget__logo">
                    <img :src="`${publicPath}assets/images/logo-light.png`" width="250" alt="Alefox">
                  </Link>
                  <ul class="list-unstyled footer-widget__info">
                    <li>
                      <span class="footer-widget__info__icon"><i class="icofont-clock-time"></i></span>
                      Open Hours of Government: Mon - Fri: 8.00 am. - 6.00 pm.
                    </li>
                    <li>
                      <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                      27/52 Avenue, NY Batticaloa 685.
                    </li>
                    <li>
                      <span class="footer-widget__info__icon"><i class="icofont-phone"></i></span>
                      <a href="tel:0094725864385">+94 725 864 35</a>
                    </li>
                  </ul><!-- /.list-unstyled -->
                  <div class="footer-widget__social">
  
                    <a href="https://facebook.com">
                      <i class="fab fa-facebook-f" aria-hidden="true"></i>
                      <span class="sr-only">Facebook</span>
                    </a>
                    <a href="https://pinterest.com">
                      <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                      <span class="sr-only">Pinterest</span>
                    </a>
                    <a href="https://twitter.com">
                      <i class="fab fa-twitter" aria-hidden="true"></i>
                      <span class="sr-only">Twitter</span>
                    </a>
                    <a href="https://instagram.com">
                      <i class="fab fa-instagram" aria-hidden="true"></i>
                      <span class="sr-only">Instagram</span>
                    </a>
                  </div><!-- /.footer-widget__social -->
                </div><!-- /.footer-widget -->
              </div><!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-3">
                <div class="footer-widget footer-widget--links">
                  <h2 class="footer-widget__title">Service</h2><!-- /.footer-widget__title -->
                  <ul class="list-unstyled footer-widget__links">
                    <li><a href="#">Always Fresh</a></li>
                    <li><a href="#">Organic Product</a></li>
                    <li><a href="#">Agriculture Staff</a></li>
                    <li><a href="#">Growth Providing</a></li>
                    <li><a href="#">Organic Farming</a></li>
                  </ul><!-- /.list-unstyled footer-widget__links -->
                </div>
              </div><!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-2">
                <div class="col-md-6 col-xl-2">
                <div class="footer-widget footer-widget--links footer-widget--links-two">
                  <h2 class="footer-widget__title">Links</h2><!-- /.footer-widget__title -->
                  <ul class="list-unstyled footer-widget__links">
                    <li><Link href="/about">About</Link></li>
                    
                    
                  </ul><!-- /.list-unstyled footer-widget__links -->
                </div><!-- /.footer-widget -->
              </div><!-- /.col-md-6 -->
              </div><!-- /.col-md-6 -->
              <div class="col-md-6 col-xl-3">
                <div class="footer-widget footer-widget--blog">

                </div><!-- /.footer-widget -->
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.main-footer__top -->
        <div class="main-footer__bottom">
          <div class="container">
            <div class="main-footer__bottom__inner">
              <p class="main-footer__copyright">
                &copy; Copyright <span class="dynamic-year"></span> by Mohamed Sifar.
              </p>
            </div><!-- /.main-footer__inner -->
          </div><!-- /.container -->
        </div><!-- /.main-footer__bottom -->
      </footer>
    </footer>
  </template>
  
  <script>
import { Link } from '@inertiajs/vue3';

  export default {
    name: 'Footer',
    components:{
      Link,
    },
    data() {
          return {
              publicPath: import.meta.env.APP_URL || '/' // Use environment variable or default to root
          };
      }
  };
  </script>