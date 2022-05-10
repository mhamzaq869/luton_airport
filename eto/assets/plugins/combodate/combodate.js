(function($){var Combodate=function(element,options){this.$element=$(element);if(!this.$element.is('input')){$.error('Combodate should be applied to INPUT element');return;}this.options=$.extend({},$.fn.combodate.defaults,options,this.$element.data());this.init();};Combodate.prototype={constructor:Combodate,init:function(){this.map={day:['D','date'],month:['M','month'],year:['Y','year'],hour:['[Hh]','hours'],minute:['m','minutes'],second:['s','seconds'],ampm:['[Aa]','']};this.$widget=$('<span class="combodate"></span>').html(this.getTemplate());this.initCombos();this.datetime=null;this.$widget.on('change','select',$.proxy(function(e){this.$element.val(this.getValue()).change();if(this.options.smartDays){if($(e.target).is('.month')||$(e.target).is('.year')){this.fillCombo('day');}}},this));this.$widget.find('select').css('width','auto');this.$element.hide().after(this.$widget);this.setValue(this.$element.val()||this.options.value);},getTemplate:function(){var tpl=this.options.template;var inputDisabled=this.$element.prop('disabled');var customClass=this.options.customClass;$.each(this.map,function(k,v){v=v[0];var r=new RegExp(v+'+'),token=v.length>1?v.substring(1,2):v;tpl=tpl.replace(r,'{'+token+'}');});tpl=tpl.replace(/ /g,'&nbsp;');$.each(this.map,function(k,v){v=v[0];var token=v.length>1?v.substring(1,2):v;tpl=tpl.replace('{'+token+'}','<select class="'+k+' '+customClass+'"'+(inputDisabled?' disabled="disabled"':'')+'></select>');});return tpl;},initCombos:function(){for(var k in this.map){var $c=this.$widget.find('.'+k);this['$'+k]=$c.length?$c:null;this.fillCombo(k);}},fillCombo:function(k){var $combo=this['$'+k];if(!$combo){return;}var f='fill'+k.charAt(0).toUpperCase()+k.slice(1);var items=this[f]();var value=$combo.val();$combo.empty();for(var i=0;i<items.length;i++){$combo.append('<option value="'+items[i][0]+'">'+items[i][1]+'</option>');}$combo.val(value);},fillCommon:function(key){var values=[],relTime;if(this.options.firstItem==='name'){if(moment.localeData){relTime=moment.localeData()._relativeTime;}else{relTime=moment.relativeTime||moment.langData()._relativeTime;}var header=typeof relTime[key]==='function'?relTime[key](1,true,key,false):relTime[key];header=header.split(' ').reverse()[0];values.push(['',header]);}else if(this.options.firstItem==='empty'){values.push(['','']);}return values;},fillDay:function(){var items=this.fillCommon('d'),name,i,twoDigit=this.options.template.indexOf('DD')!==-1,daysCount=31;if(this.options.smartDays&&this.$month&&this.$year){var month=parseInt(this.$month.val(),10);var year=parseInt(this.$year.val(),10);if(!isNaN(month)&&!isNaN(year)){daysCount=moment([year,month]).daysInMonth();}}for(i=1;i<=daysCount;i++){name=twoDigit?this.leadZero(i):i;items.push([i,name]);}return items;},fillMonth:function(){var items=this.fillCommon('M'),name,i,longNamesNum=this.options.template.indexOf('MMMMMM')!==-1,shortNamesNum=this.options.template.indexOf('MMMMM')!==-1,longNames=this.options.template.indexOf('MMMM')!==-1,shortNames=this.options.template.indexOf('MMM')!==-1,twoDigit=this.options.template.indexOf('MM')!==-1;for(i=0;i<=11;i++){if(longNamesNum){name=moment().date(1).month(i).format('MM - MMMM');}else if(shortNamesNum){name=moment().date(1).month(i).format('MM - MMM');}else if(longNames){name=moment().date(1).month(i).format('MMMM');}else if(shortNames){name=moment().date(1).month(i).format('MMM');}else if(twoDigit){name=this.leadZero(i+1);}else{name=i+1;}items.push([i,name]);}return items;},fillYear:function(){var items=[],name,i,longNames=this.options.template.indexOf('YYYY')!==-1;for(i=this.options.maxYear;i>=this.options.minYear;i--){name=longNames?i:(i+'').substring(2);items[this.options.yearDescending?'push':'unshift']([i,name]);}items=this.fillCommon('y').concat(items);return items;},fillHour:function(){var items=this.fillCommon('h'),name,i,h12=this.options.template.indexOf('h')!==-1,h24=this.options.template.indexOf('H')!==-1,twoDigit=this.options.template.toLowerCase().indexOf('hh')!==-1,min=h12?1:0,max=h12?12:23;for(i=min;i<=max;i++){name=twoDigit?this.leadZero(i):i;items.push([i,name]);}return items;},fillMinute:function(){var items=this.fillCommon('m'),name,i,twoDigit=this.options.template.indexOf('mm')!==-1;for(i=0;i<=59;i+=this.options.minuteStep){name=twoDigit?this.leadZero(i):i;items.push([i,name]);}return items;},fillSecond:function(){var items=this.fillCommon('s'),name,i,twoDigit=this.options.template.indexOf('ss')!==-1;for(i=0;i<=59;i+=this.options.secondStep){name=twoDigit?this.leadZero(i):i;items.push([i,name]);}return items;},fillAmpm:function(){var ampmL=this.options.template.indexOf('a')!==-1,ampmU=this.options.template.indexOf('A')!==-1,items=[['am',ampmL?'am':'AM'],['pm',ampmL?'pm':'PM']];return items;},getValue:function(format){var dt,values={},that=this,notSelected=false;$.each(this.map,function(k,v){if(k==='ampm'){return;}if(that['$'+k]){values[k]=parseInt(that['$'+k].val(),10);}else{var defaultValue;if(that.datetime){defaultValue=that.datetime[v[1]]();}else{defaultValue=k==='day'?1:0;}values[k]=defaultValue;}if(isNaN(values[k])){notSelected=true;return false;}});if(notSelected){return'';}if(this.$ampm){if(values.hour===12){values.hour=this.$ampm.val()==='am'?0:12;}else{values.hour=this.$ampm.val()==='am'?values.hour:values.hour+12;}}dt=moment([values.year,values.month,values.day,values.hour,values.minute,values.second]);this.highlight(dt);format=format===undefined?this.options.format:format;if(format===null){return dt.isValid()?dt:null;}else{return dt.isValid()?dt.format(format):'';}},setValue:function(value){if(!value){return;}var dt=typeof value==='string'?moment(value,this.options.format,true):moment(value),that=this,values={};function getNearest($select,value){var delta={};$select.children('option').each(function(i,opt){var optValue=$(opt).attr('value'),distance;if(optValue==='')return;distance=Math.abs(optValue-value);if(typeof delta.distance==='undefined'||distance<delta.distance){delta={value:optValue,distance:distance};}});return delta.value;}if(dt.isValid()){$.each(this.map,function(k,v){if(k==='ampm'){return;}values[k]=dt[v[1]]();});if(this.$ampm){if(values.hour>=12){values.ampm='pm';if(values.hour>12){values.hour-=12;}}else{values.ampm='am';if(values.hour===0){values.hour=12;}}}$.each(values,function(k,v){if(that['$'+k]){if(k==='minute'&&that.options.minuteStep>1&&that.options.roundTime){v=getNearest(that['$'+k],v);}if(k==='second'&&that.options.secondStep>1&&that.options.roundTime){v=getNearest(that['$'+k],v);}that['$'+k].val(v);}});if(this.options.smartDays){this.fillCombo('day');}this.$element.val(dt.format(this.options.format)).change();this.datetime=dt;}else{this.datetime=null;}},highlight:function(dt){if(!dt.isValid()){if(this.options.errorClass){this.$widget.addClass(this.options.errorClass);}else{if(!this.borderColor){this.borderColor=this.$widget.find('select').css('border-color');}this.$widget.find('select').css('border-color','red');}}else{if(this.options.errorClass){this.$widget.removeClass(this.options.errorClass);}else{this.$widget.find('select').css('border-color',this.borderColor);}}},leadZero:function(v){return v<=9?'0'+v:v;},destroy:function(){this.$widget.remove();this.$element.removeData('combodate').show();}};$.fn.combodate=function(option){var d,args=Array.apply(null,arguments);args.shift();if(option==='getValue'&&this.length&&(d=this.eq(0).data('combodate'))){return d.getValue.apply(d,args);}return this.each(function(){var $this=$(this),data=$this.data('combodate'),options=typeof option=='object'&&option;if(!data){$this.data('combodate',(data=new Combodate(this,options)));}if(typeof option=='string'&&typeof data[option]=='function'){data[option].apply(data,args);}});};$.fn.combodate.defaults={format:'DD-MM-YYYY HH:mm',template:'D / MMM / YYYY   H : mm',value:null,minYear:1970,maxYear:2015,yearDescending:true,minuteStep:5,secondStep:1,firstItem:'empty',errorClass:null,customClass:'',roundTime:true,smartDays:false};}(window.jQuery));