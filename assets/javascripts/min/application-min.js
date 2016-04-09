+function($){"use strict";function t(t){var e,n=t.attr("data-target")||(e=t.attr("href"))&&e.replace(/.*(?=#[^\s]+$)/,"");return $(n)}function e(t){return this.each(function(){var e=$(this),i=e.data("bs.collapse"),s=$.extend({},n.DEFAULTS,e.data(),"object"==typeof t&&t);!i&&s.toggle&&/show|hide/.test(t)&&(s.toggle=!1),i||e.data("bs.collapse",i=new n(this,s)),"string"==typeof t&&i[t]()})}var n=function(t,e){this.$element=$(t),this.options=$.extend({},n.DEFAULTS,e),this.$trigger=$('[data-toggle="collapse"][href="#'+t.id+'"],[data-toggle="collapse"][data-target="#'+t.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};n.VERSION="3.3.6",n.TRANSITION_DURATION=350,n.DEFAULTS={toggle:!0},n.prototype.dimension=function(){var t=this.$element.hasClass("width");return t?"width":"height"},n.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var t,i=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(i&&i.length&&(t=i.data("bs.collapse"),t&&t.transitioning))){var s=$.Event("show.bs.collapse");if(this.$element.trigger(s),!s.isDefaultPrevented()){i&&i.length&&(e.call(i,"hide"),t||i.data("bs.collapse",null));var a=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var o=function(){this.$element.removeClass("collapsing").addClass("collapse in")[a](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!$.support.transition)return o.call(this);var r=$.camelCase(["scroll",a].join("-"));this.$element.one("bsTransitionEnd",$.proxy(o,this)).emulateTransitionEnd(n.TRANSITION_DURATION)[a](this.$element[0][r])}}}},n.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var t=$.Event("hide.bs.collapse");if(this.$element.trigger(t),!t.isDefaultPrevented()){var e=this.dimension();this.$element[e](this.$element[e]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var i=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return $.support.transition?void this.$element[e](0).one("bsTransitionEnd",$.proxy(i,this)).emulateTransitionEnd(n.TRANSITION_DURATION):i.call(this)}}},n.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},n.prototype.getParent=function(){return $(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each($.proxy(function(e,n){var i=$(n);this.addAriaAndCollapsedClass(t(i),i)},this)).end()},n.prototype.addAriaAndCollapsedClass=function(t,e){var n=t.hasClass("in");t.attr("aria-expanded",n),e.toggleClass("collapsed",!n).attr("aria-expanded",n)};var i=$.fn.collapse;$.fn.collapse=e,$.fn.collapse.Constructor=n,$.fn.collapse.noConflict=function(){return $.fn.collapse=i,this},$(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(n){var i=$(this);i.attr("data-target")||n.preventDefault();var s=t(i),a=s.data("bs.collapse"),o=a?"toggle":i.data();e.call(s,o)})}(jQuery),+function($){"use strict";function t(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var n in e)if(void 0!==t.style[n])return{end:e[n]};return!1}$.fn.emulateTransitionEnd=function(t){var e=!1,n=this;$(this).one("bsTransitionEnd",function(){e=!0});var i=function(){e||$(n).trigger($.support.transition.end)};return setTimeout(i,t),this},$(function(){$.support.transition=t(),$.support.transition&&($.event.special.bsTransitionEnd={bindType:$.support.transition.end,delegateType:$.support.transition.end,handle:function(t){return $(t.target).is(this)?t.handleObj.handler.apply(this,arguments):void 0}})})}(jQuery),function($){window.console.log($(window))}(jQuery);