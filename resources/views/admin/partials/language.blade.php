
    @php
      $lang = LaravelLocalization::getCurrentLocale() == 'ar' ? 'en' : 'ar' ;
    @endphp
    <a class="nav-link text-muted my-2" href="{{ LaravelLocalization::getLocalizedURL($lang) }}" id="langSwitcher" data-mode="light">
      {{ strtoupper($lang) }}
    </a>
