<template>
  <!-- /////////////////////////////////////////Navigation -->
  <nav class="navbar navbar-default navbar-static-top text-center" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button
          type="button"
          class="navbar-toggle"
          data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1"
        >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" class="hidden-xs" alt />
          <h3 class="visible-xs">Korona</h3>
        </a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <router-link class="page-scroll" to="/">Home</router-link>
          </li>
          <li>
            <router-link class="page-scroll" to="/single">About</router-link>
          </li>
          <li>
            <router-link class="page-scroll" to="/archive">Staff</router-link>
          </li>
          <li>
            <router-link class="page-scroll" to="/contact">Contact Us</router-link>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>