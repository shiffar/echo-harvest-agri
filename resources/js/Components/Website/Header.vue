<template>
  <header class="main-header sticky-header sticky-header--normal">
    <div class="container-fluid">
      <div class="main-header__inner">
        <div class="main-header__logo">
          <Link href="/">
            <img :src="`${publicPath}assets/images/logo-dark.png`" alt="Alefox HTML" width="250">
          </Link>
        </div><!-- /.main-header__logo -->

        <nav class="main-header__nav main-menu">
          <ul class="main-menu__list">
            <li>
              <Link href="/">Home</Link>
            </li>
            <li>
              <Link href="/about">About</Link>
            </li>
            <li>
              <Link href="/blog">Blog</Link>
            </li>
          </ul>
        </nav><!-- /.main-header__nav -->

        <div class="main-header__right">
          <div class="mobile-nav__btn mobile-nav__toggler">
            <span></span>
            <span></span>
            <span></span>
          </div><!-- /.mobile-nav__toggler -->

          <div class="main-header__right__border"></div>
          <div class="main-header__call">
            <div class="main-header__call__icon"><span class="icon-phone-call-two"></span></div>
            <div class="main-header__call__title">Requesting a Call:</div>
            <a class="main-header__call__text" href="tel:0094725864385">+94 7258 643 85</a>
          </div><!-- /. main-header__info -->
        </div><!-- /.main-header__right -->
      </div><!-- /.main-header__inner -->
    </div><!-- /.container-fluid -->
  </header>
</template>

<script>
import { Link } from '@inertiajs/vue3';

export default {
  name: 'Header',
  components: {
    Link,
  },
  data() {
    return {
      publicPath: import.meta.env.APP_URL || '/', // Use environment variable or default to root
    };
  },
};
</script>
