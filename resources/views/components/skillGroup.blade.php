  @php
    $color = isset($color) ? $color : 'black';
    $textColor = isset($textColor) ? $textColor : 'black';
    $lineHeight = isset($lineHeight) ? $lineHeight : '1.15';
  @endphp
  <div>
    @if(isset($title))
      <span class="background-color-like-body"
            style="
              color: {!! $color !!};
              position: relative;
              top: 15px;
              left: 10px;
              padding: 0 10px;
              background-color: white;
            ">
       {{ $title }}
      </span>
    @endif

    <div style="
             border: 2px solid {!! $color !!};
             color: {!! $textColor !!};
             border-radius: 15px;
             padding: 10px;
             padding-top: 30px;
             line-height: {!! $lineHeight !!};
        ">
      @if(isset($items))
        @foreach($items as $item)
          <div>{{ $item }}</div>
        @endforeach
      @endif

      @if(isset($slot)) {{ $slot }} @endif
    </div>
  </div>