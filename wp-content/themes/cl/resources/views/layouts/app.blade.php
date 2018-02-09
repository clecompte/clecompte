<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @if(!is_front_page())
      @include('partials.page-header')
    @endif
    <div class="wrap container" role="document">
        <main class="main">
          @yield('content')
        </main>
    </div>
    @php(do_action('get_footer'))
      @include('partials.footer')
    @php(wp_footer())

    <?php if ('post' == get_post_type()) : ?>
      <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a0b530cafed1487"></script>
    <?php endif; ?>
  </body>
</html>
