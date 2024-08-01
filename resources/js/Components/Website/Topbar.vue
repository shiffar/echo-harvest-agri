<template>
    <div class="topbar-one">
        <div class="container">
            <div class="topbar-one__inner">
                <ul class="list-unstyled topbar-one__info">
                    <li class="topbar-one__info__item">
                        <i class="icofont-wall-clock topbar-one__info__icon"></i>
                        Mon - Sat 8.00 - 18.00. Sun Closed
                    </li>
                    <li class="topbar-one__info__item">
                        <i class="icofont-location-pin topbar-one__info__icon"></i>
                        27/52 Avenue, NY Batticaloa 685.
                    </li>
                </ul><!-- /.list-unstyled topbar-one__info -->
                <div class="topbar-one__right">
                    <div class="topbar-one__social">

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
                    </div><!-- /.topbar-one__social -->
                 
                </div><!-- /.topbar-one__right -->
            </div><!-- /.topbar-one__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar-one -->
</template>

<script>
export default {
    name: 'Topbar',
    data() {
        return {
            publicPath: import.meta.env.APP_URL || '/' // Use environment variable or default to root
        };
    }
};
</script>