/* 
Script: nogray_time_picer.js 
	The TimePicker class (see below)
 
License: 
	MIT-style license. 
		
provided by the NoGray.com
by Wesam Saif
support: support@nogray.com


Sponsored By: 

*/ 


/*
Class:
	TimePicker
	The time picker class will add a time picker to an input field
	where the user can click and drag on the handls of a clock
	
Options:
	visible:
		Indicates either the time picker would be visible or not.
		
	offset:
		The timepicker by default will show at the lower left corner of the input field. offset allows for offsetting the time picker position.
		
	startTime:
		The initial time (as an object) for the time picker (hour between 0 to 23, minute between 0 to 59)
	
	selectedTime:
		The initial seelcted time (as an object) for the time picker (hour between 0 to 23, minute between 0 to 59)
		
	format24:
		Use a 24 hours format if true
		
	imagesPath:
		The path to the images folder that hold the time picker images (without a trailing slash).
		
	faceImage:
		The clock face image.
		
	hourHandImage:
		The hour hand image (one image for 12 hours using CSS spirits).
		
	minuteHandImage:
		The minute hand image (one image for 60 minutes using CSS spirits).
		
	centerImage:
		The center image for the clock (the hands nob).
	
	closeImage:
		The close image
	
	clockSize:
		Because there could be a delay in loading the images, the clockSize is the image faceImage size.
	
	hourHandSize:
		The width and height of the hourHangImage to show one hour (the total width divided by 12). Give or take 1 pixel.
		
	minuteHandSize:
		The width and height of the minuteHangImage to show one minute (the total width divided by 60). Give or take 1 pixel.
		
	centerSize:
		The width and height of the centerImage.
	
	ampmStyles:
		The CSS style object for the AM/PM link.
		
	lang:
		The language variables for AM/PM. Also used for user input.
		
	closeOpenTimePickers:
		Close all the open time pickers when the current time picker is open.
				

Events:
	onOpen:
		Event that will be fired when the time picker is opened.
		
	onClose:
		Event that will be fired when the time picker is closed.
		
	onChange:
		Event that will be fired when the time is changed.
			

Variables:
	this.time:
		the current time (either initial or selected)
		
	
Function:
	updateAmPm:
		update the text link HTML value from am to pm or the opposite
			
	moveHands:
		move the clock hands based on the time selected
		
	clickAngle:
		return the angle from the user click
		
	updateField:
		update the input field
		
	openTimePicker:
		open the time picker
		
	closeTimePicker:
		close the time picker
		
*/

var TimePicker = new Class({
	options: {
		visible: false,
		
		offset: {x:0,
				y:0},
		
		startTime: {hour:new Date().getHours(),
					minute: new Date().getMinutes()},
							
		selectedTime: null,
		
		format24: false,
				
		imagesPath: "time_picker_files/images",
		faceImage: "clock_face.gif",
		hourHandImage: "clock_hours.gif",
		minuteHandImage: "clock_minutes.gif",
		centerImage: "clock_center.gif",
		closeImage: "close_image.gif",
		
		clockSize: {width:142,
						height:142},
		
		hourHandSize:{width:67,
						height:68},
		
		minuteHandSize: {width:111,
						height:112},
						
		centerSize: {width:7,
					height:6},
						
		ampmStyles: {'fontSize':'10pt',
						'fontWeight':'bold',
						'color':'#999999',
						'textDecoration':'none'},
						
		lang: {'am':'AM',
				'pm':'PM'},
						
		closeOpenTimePickers:true,
		
		onOpen: function(){return;},
		onClose: function(){return;},
		onChange: function(){return;}
	},
	
	initialize: function(holder, field, toggler, options){
		this.holder = $(holder);
		if ($defined(field)) {
			this.field = $(field);
			
			this.field.addEvent("focus", function(){
				this.openTimePicker();
			}.bind(this));
			
			this.field.addEvent("keyup", function(e){
				var e = new Event(e);
				var r_val = "", val = "", c = "", add_j = false;
				var i=0, loop = this.field.value.length, j=1;
				for(i=0; i<loop; i++){
					c = this.field.value.charAt(i);
					add_j = false;
					if (val.lastIndexOf(" ") <= 3){
						if (c.match(/\d/)) {
							val += c;
							add_j = true;
						}
						if ((c == ":") || (c == " ")) {
							val += " ";
							j = 1;
						}
					}
					else {
						if (c.toLowerCase() == this.options.lang.am.substr(0,1).toLowerCase()){
							val += " "+this.options.lang.am.substr(0,1).toLowerCase()+" ";
							j = 1;
						}
						if (c.toLowerCase() == this.options.lang.pm.substr(0,1).toLowerCase()){
							val += " "+this.options.lang.pm.substr(0,1).toLowerCase()+" ";
							j = 1;
						}
					}
					
					if (j%2 == 0) val += " ";
					if (add_j) j++;
				}
				
				val = val.replace(/(\s+)/g, " ").split(" ");
				
				val[0] = (val[0].toInt() % 12);
				if (isNaN(val[0])) val[0] = null;
				
				if ($defined(val[1])){
					if (val[0] < 10) r_val += "0";
					r_val += val[0]+":";
					val[1] = (val[1].toInt() % 60);
					if (isNaN(val[1])) val[1] = null;
				}
				else {
					if ($defined(val[0]))
						r_val += val[0];
				}
				
				if ($defined(val[2])){
					if (val[1] < 10) r_val += "0";
					r_val += val[1]+" ";
					if (val[2] == this.options.lang.am.substr(0,1).toLowerCase())
						r_val += this.options.lang.am;
					else if (val[2] == this.options.lang.pm.substr(0,1).toLowerCase())
						r_val += this.options.lang.pm;
				}
				else {
					if ($defined(val[1]))
						r_val += val[1];
				}
				
				this.field.value = r_val.trim();
				
				e.stop();
				return false;
			
			}.bind(this));
			
			this.field.addEvent("blur", function(){
				this.time.hour = this.field.value.substr(0,2).toInt() || 0;
				this.time.minute = this.field.value.substr(3,2).toInt() || 0;
				if (this.field.value.substr(6) == this.options.lang.pm) this.time.hour += 12;
				
				this.updateAmPm();
				this.updateField();	
				this.moveHands();
				
				this.fireEvent("onChange");
				
			}.bind(this));
		}
		else {
			this.field = null;
		}
		if ($defined(toggler))
			this.toggler = $(toggler);
		else
			this.toggler = null;
		
		this.setOptions(options);
		
		this.moveEl = {};
		this.moveEl['move'] = false;
		
		if ($defined(this.options.selectedTime)) this.time = this.options.selectedTime;
		else this.time = this.options.startTime;
		
		this.holder.setStyles({'width':this.options.clockSize.width, 'height':this.options.clockSize.height});

		
		var img = new Element("img", {'src':this.options.imagesPath+"/"+this.options.faceImage,
										'styles':{'position':'absolute',
						'z-index':21000}});
		this.holder.adopt(img);
		
		if (!this.options.visible){
			if ((window.ie) && (!window.ie7)){
				var iframe = new Element("iframe", {'src':'about:Blank',
											'styles':{'width':this.options.clockSize.width,
												'position':'absolute',
												'z-index':20000,
												'height':this.options.clockSize.height},
											'frameborder':0
										});
				this.holder.adopt(iframe);					
			}

			this.holder.setStyles({
				'position':'absolute',
				'z-index':25000,
				'opacity':0
			});
			
			if ($defined(this.toggler)){
				this.toggler.addEvent("click", function(e){
					var e = new Event(e);
					if (this.holder.getStyle('opacity') == 0) this.openTimePicker();
					else this.closeTimePicker();
					e.stop();
				}.bind(this));
			}
			
			var cls = new Element("img", {'src':this.options.imagesPath+"/"+this.options.closeImage,
											'styles':{'position':'absolute',
														'z-index':26000,
														'right':0,
														'cursor':'pointer'}});
			
			this.holder.adopt(cls);
			
			cls.addEvent("click", function(){
				this.closeTimePicker();
			}.bind(this));
			
		}
		
		this.minuteHand = new Element("div", {styles:{'marginTop':((this.options.clockSize.height - this.options.minuteHandSize.height)/2).toInt(),
													'marginLeft':((this.options.clockSize.width - this.options.minuteHandSize.width)/2).toInt(),
													'width':this.options.minuteHandSize.width,
													'height':this.options.minuteHandSize.height,
													'position':'absolute',
													'z-index':22000,
													'background':'url('+this.options.imagesPath+"/"+this.options.minuteHandImage+') no-repeat top left'}});
													
		this.holder.adopt(this.minuteHand);
		
		
		this.hourHand = new Element("div", {styles:{'marginTop':((this.options.clockSize.height - this.options.hourHandSize.height)/2).toInt(),
													'marginLeft':((this.options.clockSize.width - this.options.hourHandSize.width)/2).toInt(),
													'width':this.options.hourHandSize.width,
													'height':this.options.hourHandSize.height,
													'position':'absolute',
													'z-index':23000,
													'background':'url('+this.options.imagesPath+"/"+this.options.hourHandImage+') no-repeat top left'}});
													
		this.holder.adopt(this.hourHand);
		
		var c_img = new Element("img", {'src':this.options.imagesPath+"/"+this.options.centerImage,
										'styles':{'position':'absolute',
													'z-index':24000,
													'marginTop':((this.options.clockSize.height - this.options.centerSize.height)/2).toInt(),
													'marginLeft':((this.options.clockSize.width - this.options.centerSize.width)/2).toInt()}});
		this.holder.adopt(c_img);
		
		
		this.ampm = new Element ("a", {'styles':this.options.ampmStyles,
										'href':'#'});
		this.updateAmPm();
		this.ampm.setStyles({'position':'absolute',
								'z-index':25000,
								'display':'block',
								'marginTop':((this.options.clockSize.height + (this.options.clockSize.height/4))/2).toInt(),
								'marginLeft':((this.options.clockSize.width-20)/2).toInt()});
								
		this.holder.adopt(this.ampm);
		
		
		this.ampm.addEvent("click", function(e){
			var e = new Event(e);
			e.stop();
			this.time.hour = ((this.time.hour + 12) %24);
			this.updateAmPm();
			this.updateField();	
			this.fireEvent("onChange");
		}.bind(this));
		
		
		this.moveHands();
		
		this.holder.addEvent("mousedown", function(e){
			var e = new Event(e);
			var coord = this.holder.getCoordinates();
			
			var ang = this.clickAngle({x:e.client.x, y:e.client.y}, coord);
			var h_ang = (this.time.hour%12) * 30;
			var m_ang = this.time.minute * 6;
						
			this.moveEl['move'] = true;
			this.moveEl['coord'] = coord;
			
			if (Math.abs(ang - m_ang) < Math.abs(ang - h_ang))
				this.moveEl['el'] = "minute";
			else if(Math.abs(ang - m_ang) > Math.abs(ang - h_ang))
				this.moveEl['el'] = "hour";
			else {
				if (e.target.getStyle("backgroundImage").indexOf(this.options.hourHandImage) != -1)
					this.moveEl['el'] = "hour";
				else
					this.moveEl['el'] = "minute";
			}
			
		}.bind(this));
		
		this.holder.addEvent("mouseup", function(){
			this.moveEl = {};
			this.moveEl['move'] = false;
		}.bind(this));		
		
		this.holder.addEvent("mousemove", function(e){
			if (this.moveEl['move']){
				var e = new Event(e);
				var add;
				
				var ang = this.clickAngle({x:e.client.x, y:e.client.y}, this.moveEl.coord);
				if (this.moveEl.el == "hour") var ang_by = 30;
				else var ang_by = 6;
			
				if (this.moveEl.el == "hour"){
					var h = (ang/ang_by).toInt();
					if (!isNaN(h))
						this.time.hour = h;
					
					if (this.ampm.innerHTML == this.options.lang.pm)
						this.time.hour = (this.time.hour+12)%24;
				}
				else{
					var m = (ang/ang_by).toInt();
					if (!isNaN(m))
						this.time.minute = m;
				}
											
				this.moveHands();
				this.updateField();
				
				this.fireEvent("onChange");
			}
			
		}.bind(this));
		
		_all_page_timepickers.push(this);
	},
	
	updateAmPm: function() {
		if (this.time.hour < 12) this.ampm.setHTML(this.options.lang.am);
		else this.ampm.setHTML(this.options.lang.pm);
	},
	
	moveHands: function(){
		try {
			this.hourHand.setStyle("backgroundPosition", (((this.time.hour % 12) *  this.options.hourHandSize.width) * -1));
			this.minuteHand.setStyle("backgroundPosition", ((this.time.minute * this.options.minuteHandSize.width) * -1));
		}
		catch(e){}
	},
	
	clickAngle: function(pnt, coord){
		var c_x = coord.width/2;
		var c_y = coord.height/2;
		
		var x = pnt.x + window.getScrollLeft() - coord.left;
		var y = pnt.y + window.getScrollTop() - coord.top;
		
		var t_x = c_x;
		var t_y = y;
		
		var CA = t_x - x;
		var CO = t_y - c_y;
		var AO = Math.sqrt(Math.pow(CA, 2) + Math.pow(CO, 2));
		
		var ang = Math.round((Math.acos((Math.pow(Math.abs(CA), 2) - Math.pow(Math.abs(AO), 2) - Math.pow(CO, 2))/(2 * CO * AO))) * 180/Math.PI);
		
		if (x < c_x) ang = 360 - ang;
		
		return ang;
	},
	
	updateField: function(){
		if (!$defined(this.field)) return;
		var val = "";
		if (this.options.format24)
			var h_val = this.time.hour;
		else
			var h_val = (this.time.hour%12);
			
		if (h_val < 10) val += "0";
		val += h_val+":";
		
		if (this.time.minute < 10) val += "0";
		val += this.time.minute;
		
		if (!this.options.format24){
			if (this.time.hour < 12) val += " "+this.options.lang.am;
			else val += " "+this.options.lang.pm;
		}
		this.field.value = val;
	},
	
	openTimePicker: function(){
		if (this.options.closeOpenTimePickers) $closeAllTimePickers();
		if ($defined(this.field)){		
			var coord = this.field.getCoordinates();
			var top = coord.top+coord.height+this.options.offset.y;
			var left = coord.left+this.options.offset.x;
		}
		else {
			var coord = this.holder.getCoordinates();
			var top = coord.top;
			var left = coord.left;
		}
		
		this.holder.setStyles({
			   'top': top,
			   'left': left,
			   'opacity':1
			});
		
		this.fireEvent("onOpen");
	},
	
	closeTimePicker: function(){
		if (this.options.visible) return false;
		this.holder.setStyle('opacity', 0);			
		this.fireEvent("onClose");
	}
});

TimePicker.implement(new Events, new Options);

// array to hold all the time pickers on the page
var _all_page_timepickers = [];

// function to close all the open time pickers
var $closeAllTimePickers = function(){
	_all_page_timepickers.each(function(obj){
			obj.closeTimePicker();
		});
};