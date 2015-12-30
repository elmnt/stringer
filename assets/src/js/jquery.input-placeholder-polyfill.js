/*
  By Osvaldas Valutis, www.osvaldas.info
  Available for use under the MIT License
*/

;( function( $, window, document, undefined )
{
  $.fn.inputPlaceholderPolyfill = function( options )
  {
    if( 'placeholder' in document.createElement( 'input' ) ) return this;

    var options = $.extend(
              {
              className: 'is-placeholder'
            },
            options );

    this.each( function()
    {
      var $this = $( this );
      if( !$this.is( '[placeholder]' ) ) return true;

      var isPassword   = $this.is( 'input[type="password"]' ),
        isTextarea   = $this.is( 'textarea' ),
        defaultValue = $.trim( isTextarea ? $this.text() : $this.val() ),
        placeholder  = $this.attr( 'placeholder' ) + '\u200e',
        $form    = $this.parents( 'form' ),

        set = function()
        {
          $this.addClass( options.className );
          isTextarea ? $this.text( placeholder ) : $this.val( placeholder );
          if( isPassword ) $this.attr( 'type', 'text' );
        },
        clean = function()
        {
          if( $.trim( isTextarea ? $this.text() : $this.val() ) == placeholder )
            isTextarea ? $this.text( '' ) : $this.val( '' );
        };

      if( defaultValue == '' || defaultValue == placeholder ) set();

      $this.off( 'focus.inputPlaceholderPolyfill' ).on( 'focus.inputPlaceholderPolyfill', function()
      {
        $this.removeClass( options.className );
        if( isPassword ) $this.attr( 'type', 'password' );
        clean();
      })
      .off( 'blur.inputPlaceholderPolyfill' ).on( 'blur.inputPlaceholderPolyfill', function()
      {
        if( $.trim( isTextarea ? $this.text() : $this.val() ) == '' ) set();
      });

      if( $form.length ) $form.on( 'submit', clean );
    });
    return this;
  };
})( jQuery, window, document );