<template>
    <!--START HOME-->
        <section class="section section-lg height-100vh scroll-select" id="home" style="background-image: url('images/img-1.jpg'); background-size: cover; background-position: center;">
            <div class="bg-overlay"></div>
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-white text-center">
                                <vue-typer class="home-title text-rotate" :shuffle='true' :text='["Professional Landing Page Template","We help startups launch their products","Perfect solution for small businesses"]'></vue-typer>
                                <p class="play-shadow margin-t-30 margin-l-r-auto"><a href="//vimeo.com/99025203" class="play-btn video-play-icon"><i class="mdi mdi-play text-center"></i></a></p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--END HOME-->
</template>

<script>
"use strict";
import { VueTyper } from 'vue-typer'

export default {
  name: 'HeroSection7',
  props: {
  },
  components: {
    VueTyper
  }
}
</script>
