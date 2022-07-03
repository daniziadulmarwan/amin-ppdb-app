<!doctype html>
<html lang="en">
  @include('include.page.header')
  <body>
    @yield('page')
    <a href="https://api.whatsapp.com/send?phone=6285352594403&text=Assalamualaikum, saya ingin menanyakan perihal PPDB" target="_blank" class="btn-chat">
      <div class="img-chat"></div>
    </a>
    @include('include.page.script')
  </body>
</html>
