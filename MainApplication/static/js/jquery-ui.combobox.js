(function( $ ) {
    $.widget( "ui.combobox", {
        _create: function() {
            var input,
                that = this,
                select = this.element.hide(),
                selected = select.children( ":selected" ),
                value = selected.val() ? selected.text() : "",
                wrapper = this.wrapper = $( "<span>" )
                    .addClass( "ui-combobox" )
                    .attr('id',that.element.attr('id')+'_combobox')
                    .insertBefore( select );

            function removeIfInvalid(element) {
                var value = $( element ).val(),
                    matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( value ) + "$", "i" ),
                    valid = false;
                select.children( "option" ).each(function() {
                    if ( $( this ).text().match( matcher ) ) {
                        this.selected = valid = true;
                        return false;
                    }
                })
                if ( !valid ) {
                    // remove invalid value, as it didn't match anything
                    select.children( "option" ).each(function() {
                        if( $( this ).attr('value') == 'None' ){
                            select.val('None');
                            that.element.change();

                            $( element )
                                .val( select.children( 'option[value="None"]' ).text() )
                                .attr( "title", value + " didn't match any item" )
                                .tooltip( "open" );
                            
                            return false;
                        }else{
                            that.element.change();

                            $( element )
                                .val( '' )
                                .attr( "title", value + " didn't match any item" )
                                .tooltip( "open" );
                        }
                    });

                    setTimeout(function() {
                        input.tooltip( "close" ).attr( "title", "" );
                    }, 2500 );
                    input.data( "autocomplete" ).term = "";
                }
            }

            input = $( "<input>" )
                .appendTo( wrapper )
                .val( value )
                .attr( "title", "" )
                .attr( "id", that.element.attr('id')+"_combobox_input" )
                .addClass( "ui-state-default ui-combobox-input" )
                .autocomplete({
                    delay: 0,
                    minLength: 0,
                    source: function( request, response ) {
                        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
                        response( select.children( "option" ).map(function() {
                            var text = $( this ).text();
                            if ( this.value && ( !request.term || matcher.test(text) ) )
                                return {
                                    label: text.replace(
                                        new RegExp(
                                            "(?![^&;]+;)(?!<[^<>]*)(" +
                                            $.ui.autocomplete.escapeRegex(request.term) +
                                            ")(?![^<>]*>)(?![^&;]+;)", "gi"
                                        ), "<strong>$1</strong>" ),
                                    value: text,
                                    option: this
                                };
                        }) );
                    },
                    select: function( event, ui ) {
                        ui.item.option.selected = true;
                        that._trigger( "selected", event, {
                            item: ui.item.option
                        });

                        that.element.change();
                        $( '#'+that.element.attr('id')+'_combobox_btn' ).removeClass('open');
                    },
                    change: function( event, ui ) {
                        if ( !ui.item )
                            return removeIfInvalid( this );
                    },
                    close: function( event, ui ) {
                        $( '#'+that.element.attr('id')+'_combobox_btn' ).removeClass('open');
                    }
                })
                .addClass( "ui-widget ui-widget-content ui-corner-left" )
                .click(function() {

                    $( '#'+that.element.attr('id')+'_combobox_btn' ).addClass('open');

                    // close if already visible
                    if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
                        input.autocomplete( "close" );
                        removeIfInvalid( input );
                        return;
                    }

                    // work around a bug (likely same cause as #5265)
                    $( this ).blur();

                    // pass empty string as value to search for, displaying all results
                    input.autocomplete( "search", "" );
                    input.focus();
                    input.select();

                    return false;
                });;

            input.data( "autocomplete" )._renderItem = function( ul, item ) {
                return $( "<li>" )
                    .data( "item.autocomplete", item )
                    .append( "<a>" + item.value + "</a>" )
                    .appendTo( ul );
            };

            $( "<a>" )
                .attr( 'id', that.element.attr('id')+'_combobox_btn')
                .attr( 'class', 'btn combobox-btn combobox-enabled')
                .append( '<span class="caret"></span>' )
                .appendTo( wrapper )
                .click(function() {

                    // Add class
                    var that = this;
                    $( this ).addClass('open');

                    // close if already visible
                    if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
                        input.autocomplete( "close" );
                        removeIfInvalid( input );
                        return;
                    }

                    // work around a bug (likely same cause as #5265)
                    $( this ).blur();

                    // pass empty string as value to search for, displaying all results
                    input.autocomplete( "search", "" );
                    input.focus();

                    return False;
                });

            $( "<a>" )
                .attr( 'class', 'btn combobox-btn combobox-disabled')
                .append( '<span class="caret"></span>' )
                .appendTo( wrapper )
                .hide();

            input
                .tooltip({
                    position: {
                        of: this.button
                    },
                    tooltipClass: "ui-state-highlight"
                });
        },

        reset: function() {
            var that = this
            this.element.children( "option" ).each(function() {

                if( $( this ).attr('value') == 'None' ){
                    $( this ).val('None').change();
                    $( '#'+that.element.attr('id')+'_combobox_input' )
                        .val( $( this ).text() );
                    
                    return false;
                }else{
                    $( this ).val('None').change();
                    $( '#'+this.element.attr('id')+'_combobox_input' )
                        .val( $( this ).text() );
                }
            });
        },

        disabled: function() {
            $('#'+this.element.attr('id')+'_combobox_input').attr('disabled','disabled');
            $('#'+this.element.attr('id')+'_combobox > .combobox-enabled').hide();
            $('#'+this.element.attr('id')+'_combobox > .combobox-disabled').show();
        },

        enabled: function() {
            $('#'+this.element.attr('id')+'_combobox_input').removeAttr('disabled');
            $('#'+this.element.attr('id')+'_combobox > .combobox-enabled').show();
            $('#'+this.element.attr('id')+'_combobox > .combobox-disabled').hide();
        },

        show: function() {
            $('#'+this.element.attr('id')+'_combobox').show();
        },

        hide: function() {
            $('#'+this.element.attr('id')+'_combobox').hide();
        },

        get: function() {
            return $('#'+this.element.attr('id')+'_combobox');
        },

        destroy: function() {
            this.wrapper.remove();
            this.element.show();
            $.Widget.prototype.destroy.call( this );
        }
    });
})( jQuery );