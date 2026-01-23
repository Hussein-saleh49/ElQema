 @php
     $currentLocale = LaravelLocalization::getCurrentLocale();
     $switchTo = $currentLocale === 'ar' ? 'en' : 'ar';
 @endphp
 <div class="mb-3">
     <a class="btn btn-sm btn-outline-primary" href="{{ LaravelLocalization::getLocalizedURL($switchTo) }}">
         {{ strtoupper($switchTo) }}
     </a>
 </div>
