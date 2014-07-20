<li class="radio_item item"> 

<div class="radio_button {{#if this.selected}}selected{{/if}}">

</div>

<input class="name" type="text" value="{{this.name}}" placeholder="{{this.name_placeholder}}" maxlength="50">

<div class="drag_item">#</div><div class="delete_item">x</div></li>



	try {
			Typekit.load();
		} catch(e) {}
	</script></head><body class=" "><div id="header" class="block"><div class="wrap"><div class="logo-wrap"><a class="logo" href="/"><img src="/static_media/img/logo.png" alt="formbakery" /></a></div><ul class="menu"><li><a href="/bakery/?fresh">Build</a></li><!-- <li><a href="/learn-more/">Learn More</a></li> --><li><a href="/pricing/">Pricing</a></li><li><a href="/authenticate/?next=/bakery/">Login</a></li></ul></div></div><div id="content_wrapper"><div id="content"><div id="bakery"></div><script name="bakery_structure" type="text/html"><div id="ingredients"></div><div id="oven"><ul id="my_form"></ul><div class="cut-here"><a class="export_form_trigger" href="/preview/">&nbsp;</a></div></div></script><!-- end bakery_structure --><script name="blank" type="text/html"><div template="blank"><h3><b>Your form is empty!</b><br>Drag a field from the right to begin <span class="rarr">&rarr;</span></h3></div></script><!-- end blank --><script name="header" type="text/html"><div template="header" class="header"><input class="form_name editable" type="text" placeholder="Form Name" maxlength="17"><a class="button export_form export_form_trigger" href="/preview/">Preview & Download</a></div></script><!-- end header --><script name="footer" type="text/html"><div template="footer" class="footer"><h6>Form submissions will be sent to:</h6><input class="owner_name editable" type="text" placeholder="Full Name"><input class="owner_email editable" type="text" placeholder="email@address.com"></div></script><!-- end footer --><script name="complete_form" type="text/html"><div id="complete-form"><h5>Form Information</h5>
		{{#if form_name}}
			<p>Your form needs a name:</p><input class="form_name" placeholder="Form Name"><br>
		{{/if}}
		{{#if owner_info}}
			<p>Form submissions should be emailed to:</p>
			{{#if owner_name}}
				<input class="owner_name" placeholder="Full Name">
			{{/if}}
			{{#if owner_email}}
			<input class="owner_email" placeholder="email@address.com">
			{{/if}}
		{{/if}}
		
		<a class="export_form_continue_trigger" href="/preview/">Continue</a><div style="clear:both"></div></div></script><!-- end complete_form --><script name="field_structure" type="text/html"><ul field-type="[[field_type]]" class="[[field_type]]" title="[[field_type_title]]"></ul></script><!-- end field_structure --><script name="field" type="text/html"><li class="[[field_type]]" field-type="[[field_type]]" style="display:none"></li></script><!-- end field --><script name="el_input" type="text/html"><!-- interface --><div class="interface" style="display:none"><!-- actions --><div class="tag options"><span class="title">options</span><span class="icon"></span></div><div class="tag delete"><span class="title">delete</span><span class="icon"></span></div><!-- name --><input class="name" type="text" value="{{name}}" placeholder="{{name_placeholder}}" maxlength="50"><!-- fake input --><div class="input"></div><div class="error name-untitled">Give this field a name a name</div><div class="error name-duplicate">This name is already in use, please choose a unique name</div><!-- options --><div class="options_popup"><div class="wrapper"><div class="required"><h5>Required</h5><ul><li><label><input type="checkbox" {{#if required}}checked{{/if}}><span>This is a required field</span></label></li></ul></div><div class="field_type"><h5>Field Type</h5><ul class="{{#if field_validation}}{{field_validation}}{{else}}default{{/if}}"><!-- selected items get checked by adding class checked to them "checked" --><li class="email"><span>Email Address</span></li><li class="numeric"><span>Numeric (0-9 &amp; spaces)</span></li><li class="alpha"><span>Alpha (a-z &amp; spaces)</span></li><li class="default"><span>Default (all characters)</span></li></ul></div><br><ul class="delete"><li><span>Delete this field</span></li></ul></div><!-- <div class="advanced">show advanced options</div> --></div></div><!-- end interface --></script><!-- end el_input --><script name="el_radio" type="text/html"><!-- interface --><div class="interface" style="display:none"><!-- actions --><div class="tag delete"><span class="title">delete</span><span class="icon"></span></div><!-- name --><input class="name" type="text" value="{{name}}" placeholder="{{name_placeholder}}" maxlength="50"><div class="error name-untitled">Give this field a name a name</div><div class="error name-duplicate">This name is already in use, please choose a unique name</div><!-- radio list --><ul class="radio_list item_list">
			{{#each items}}
				<!-- TODO: render items in the view and pass result here so the item html is not repeated --><li class="radio_item item"><div class="radio_button {{#if this.selected}}selected{{/if}}"></div><input class="name" type="text" value="{{this.name}}" placeholder="{{this.name_placeholder}}" maxlength="50"><div class="drag_item">#</div><div class="delete_item">x</div></li>
			{{/each}}
		</ul><!-- add radio item button --><div class="add_item_wrap"><input class="new_item_name editable" value="" placeholder="Enter radio button name &amp; press enter…"></div></div><!-- end interface --></script><!-- end el_radio --><script name="el_radio_item" type="text/html"><li class="radio_item item"><div class="radio_button {{#if this.selected}}selected{{/if}}"></div><input class="name" type="text" value="{{this.name}}" placeholder="{{this.name_placeholder}}" maxlength="50"><div class="drag_item">#</div><div class="delete_item">x</div></li></script><!-- end el_radio_item --><script name="el_check" type="text/html"><!-- interface --><div class="interface" style="display:none"><!-- actions --><div class="tag delete"><span class="title">delete</span><span class="icon"></span></div><!-- name --><input class="name" type="text" value="{{name}}" placeholder="{{name_placeholder}}" maxlength="50"><div class="error name-untitled">Give this field a name a name</div><div class="error name-duplicate">This name is already in use, please choose a unique name</div><!-- check list --><ul class="check_list item_list">
			{{#each items}}
				<li class="check_item item"><div class="check_button {{#if this.selected}}selected{{/if}}"></div><input class="name" type="text" value="{{this.name}}" placeholder="{{this.name_placeholder}}" maxlength="50"><div class="drag_item">#</div><div class="delete_item">x</div></li>
			{{/each}}
		</ul><!-- add check item button --><div class="add_item_wrap"><input class="new_item_name editable" value="" placeholder="Enter checkbox name &amp; press enter…"></div></div><!-- end interface --></script><!-- end el_check --><script name="el_check_item" type="text/html"><li class="check_item item"><div class="check_button {{#if this.selected}}selected{{/if}}"></div><input class="name" type="text" value="{{this.name}}" placeholder="{{this.name_placeholder}}" maxlength="50"><div class="drag_item">#</div><div class="delete_item">x</div></li></script><!-- end el_check_item --><script name="el_select" type="text/html"><!-- interface --><div class="interface" style="display:none"><!-- actions --><div class="tag delete"><span class="title">delete</span><span class="icon"></span></div><!-- name --><input class="name" type="text" value="{{name}}" placeholder="{{name_placeholder}}" maxlength="50"><div class="error name-untitled">Give this field a name a name</div><div class="error name-duplicate">This name is already in use, please choose a unique name</div><!-- select box --><div class="select"></div><div class="dropdown {{#unless items}}state_empty{{/unless}}"><p class="empty_message">Your dropdown list is empty</p><ul class="select_list">
				{{#each items}}
					<li class="select_item"><span class="drag_item" title="drag me">|</span><input class="item_name editable" value="{{this.name}}" placeholder="{{this.name_placeholder}}" /><span class="del_item" title="delete item">x</span></li>
				{{/each}}
			</ul><div class="add_item_wrap"><input class="new_item_name editable" value="" placeholder="Enter option name &amp; press enter…" /><!-- <span class="item_options">#</span> --></div></div></div><!-- end interface --></script><!-- end el_select --><script name="el_select_item" type="text/html"><li class="select_item"><span class="drag_item" title="drag me">|</span><input class="item_name editable" value="{{this.name}}" placeholder="{{this.name_placeholder}}" /><span class="del_item" title="delete item">x</span></li></script><!-- end el_select_item --><script name="el_textarea" type="text/html"><!-- interface --><div class="interface" style="display:none"><!-- actions --><div class="tag options"><span class="title">options</span><span class="icon"></span></div><div class="tag delete"><span class="title">delete</span><span class="icon"></span></div><!-- name --><input class="name" type="text" value="{{name}}" placeholder="{{name_placeholder}}" maxlength="50"><div class="error name-untitled">Give this field a name a name</div><div class="error name-duplicate">This name is already in use, please choose a unique name</div><!-- fake input --><div class="textarea"></div><!-- options --><div class="options_popup"><div class="wrapper"><div class="required"><h5>Required</h5><ul><li><label><input type="checkbox" {{#if required}}checked{{/if}}><span>This is a required field</span></label></li></ul></div><br><ul class="delete"><li><span>Delete this field</span></li></ul></div></div></div><!-- end interface --></script><!-- end el_textarea --><div style="clear:both"></div></div></div><!-- end content_wrapper --><script name="modal-wrap" type="text/html"><div id="modal-wrap"><div class="modal"></div></div><div id="modal-bg">&nbsp;</div></script><script name="tooltip" type="text/html"><div id="{{unique_id}}" class="tooltip" style="left:{{x}}px; top:{{y}}px; display:none"><p>{{message}}</p><span class="tail"></span></div></script><script type="text/javascript">
		(function(e, b) {
			if (!b.__SV) {
				var a, f, i, g;
				window.mixpanel = b;
				a = e.createElement("script");
				a.type = "text/javascript";
				a.async = !0;
				a.src = ("https:" === e.location.protocol ? "https:" : "http:") + '//cdn.mxpnl.com/libs/mixpanel-2.2.min.js';
				f = e.getElementsByTagName("script")[0];
				f.parentNode.insertBefore(a, f);
				b._i = [];
				b.init = function(a, e, d) {
					function f(b, h) {
						var a = h.split(".");
						2 == a.length && (b = b[a[0]], h = a[1]);
						b[h] = function() {
							b.push([h].concat(Array.prototype.slice.call(arguments, 0)))
						}
					}
					var c = b;
					"undefined" !==
						typeof d ? c = b[d] = [] : d = "mixpanel";
					c.people = c.people || [];
					c.toString = function(b) {
						var a = "mixpanel";
						"mixpanel" !== d && (a += "." + d);
						b || (a += " (stub)");
						return a
					};
					c.people.toString = function() {
						return c.toString(1) + ".people (stub)"
					};
					i = "disable track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.track_charge people.clear_charges people.delete_user".split(" ");
					for (g = 0; g < i.length; g++) f(c, i[g]);
					b._i.push([a, e, d])
				};
				b.__SV = 1.2
			}
		})(document, window.mixpanel || []);
		mixpanel.init("e10c4eb9b6f23e0f8b90043d5b913663");
	</script><script type="text/javascript">
		// Globals
		var MEDIA_URL = /static_media/,
			AUTHENTICATED = false,
			PRODUCTION = true
	</script><script type="text/javascript" src="/static_media/js/compressed/base.js"></script><div style='display:none'><input type='hidden' name='csrfmiddlewaretoken' value='AUkbSZaxjvoeGIqTlt3f2QOPEUF0kZnP' /></div><script type="text/javascript">
		var CAN_EDIT = true;
	</script><script type="text/javascript" src="/static_media/js/compressed/bakery.js"></script><script type="text/javascript">
		mixpanel.track("Bakery");
		
		
		
		
		.....
		
		<script>
		
/*@~ Bakery
-----------------------------------------*/

var Bakery = {
	active: false,
	build: {},
	set_state: {},
	set: {}
};

Bakery.init = function() {
	this.events();
	this.build.bakery();
	this.set_state.blank();
	this.restore();
};

// render bakery structure template into bakery
Bakery.build.bakery = function() {
	// add bakery structure
	_.bakery.prepend(TEMPLATES.bakery_structure);

	// add newly added elements to cache
	_.ingredients = $('#ingredients');
	_.oven = $('#oven');
	_.my_form = $('#my_form');
};

// blank state can be applied when no fields exist
Bakery.set_state.blank = function() {
	// set oven to empty
	_.oven.addClass('blank').prepend(TEMPLATES.blank);
};

// active state means the bakery is active
Bakery.set_state.active = function() {
	_.oven
		.removeClass('blank')
		.prepend(TEMPLATES.header)
		.append(TEMPLATES.footer);
	
	_.oven.find('div[template=blank]').remove();

	Bakery.active = true;

	// enable next button
	$('#bakery_action').removeClass('disabled');

	_.form_name = $('.form_name', _.header);
	_.owner_name = $('.owner_name', _.footer);
	_.owner_email = $('.owner_email', _.footer);

	mixpanel.track("Bakery Activated");
};

// update header form name
Bakery.set.header = function(options) {
	var defaults = {form_name: 'Form Name'},
		settings = $.extend({}, defaults, options);
	
	$('.form_name', _.header).val(settings.form_name);
};

// update footer info
Bakery.set.footer = function(options) {
	var defaults = {owner_name: 'Full Name', owner_email: 'email@address.com'},
		settings = $.extend({}, defaults, options);
	
	$('.owner_name', _.footer).val(settings.owner_name);
	$('.owner_email', _.footer).val(settings.owner_email);

};

// remove all fields and set state to blank
Bakery.reset = function() {
	// remove all list elements from my_form
	$('> li', _.my_form).remove();

	// reset header and footer
	$('.header, .footer', _.oven).remove();
	_.oven.prepend(TEMPLATES.header);
	_.oven.append(TEMPLATES.footer);
};

// loads saved state
Bakery.restore = function() {
	// get saved form json and pass it to json to form which will parse the json and render the fields
	Bakery.json_to_form( Bakery.get_form() );
};

Bakery.validateFields = function() {
	/*
		Validates each field
		Returns an error code if any errors found

		0: no errors
		1: no fields added
		2: untitled field/s
		3: duplicate field names
	*/

	// returns true if no errors were found
	var form = JSON.parse( this.form_to_json() ),

		// an array of field names to validate
		field_names = function() {
			var names = [];
			$(form.fields).each(function(i, field) {
				names.push(field.name);
			});
			return names;
		}(),
		
		// keeps validation state
		errorCode = 0;

	// hide all errors
	_.my_form.find('.error').hide();

	// is form empty?
	if (!form.fields.length) return 1;

	$(form.fields).each(function(i, field) {

		// is name unfilled?
		if (field.name === '') {
			Field.show_error(i + 1, 'name-untitled');
			errorCode = 2;
		}
		
		// is name duplicate
		else if ($.arraySearch(field.name, field_names) > 1) {
			Field.show_error(i + 1, 'name-duplicate');
			errorCode = 3;
		}
	});

	return errorCode;
};

Bakery.requestFormInfo = {
	init: function(callback) {
		var template_dict = {
			'form_name': !_.form_name.val(),
			'owner_info': !_.owner_name.val() || !_.owner_email.val(),
			'owner_name': !_.owner_name.val(),
			'owner_email': !_.owner_email.val()
		};
		
		// render form info modal
		Modal.show(render(TEMPLATES.complete_form, template_dict, true), 'complete_form');

		this.events();
		this.callback = callback;
		_.complete_form = $('#complete-form');
	},
	updateForm: function() {


		var updated_form_name = _.complete_form.find('.form_name').val(),
			updated_owner_name = _.complete_form.find('.owner_name').val(),
			updated_owner_email = _.complete_form.find('.owner_email').val();

		// update form values
		if (updated_form_name) _.form_name.val(updated_form_name);
		if (updated_owner_name) _.owner_name.val(updated_owner_name);
		if (updated_owner_email) _.owner_email.val(updated_owner_email);

		// call leave function all over again with the same callback
		Bakery.leave(this.callback);
	},
	events: function() {
		var self = this;
		$('.export_form_continue_trigger', _.complete_form).live('click', function() {
			self.updateForm();
			return false;
		});
	}
};

Bakery.validateFormInfo = function(callback) {
	/*
		Will check if the header and footer are filled out.
		If not, you can optionally tell it to fill it out and
		provide a callback function to fire once the user is done.
	*/

	// if header & footer fields filled
	if (_.form_name.val() && _.owner_name.val() && _.owner_email.val()) {
		return callback();
	} else {
		Bakery.requestFormInfo.init(callback);
	}
};

// this method makes it safe to leave the page
// it will validate the form build
// it will ask for more information
Bakery.leave = function(callback) {

	// save the form before moving ahead
	Bakery.save_form();

	var validationResult = Bakery.validateFields();

	// are all the fields valid?
	if (validationResult === 1) {
		return alert('Your form is empty, please add a few fields and try again.');
	} else if (validationResult === 2) {
		return alert('Some of your fields do not have a name. Please name them and try again.');
	} else if (validationResult === 3) {
		return alert('We found that some of your fields have duplicate names. Please ensure that all fields have a unique name and try again.');
	}

	// validate header and footer
	// pass it the callback incase user interaction is required
	return Bakery.validateFormInfo(callback);
};

// events to run onload
Bakery.events = function() {
	var self = this;
	// export button on bakery page should save form
	// TODO: these should have contexts
	$('.export_form_trigger').live('click', function() {
		self.leave(function() {
			// callback
			document.location.href = '/preview/';
		});
		return false;
	});
};

// takes json form and renders form into bakery
Bakery.json_to_form = function(new_form) {

	if (!new_form) return;

	// replace all escaped quotes with quote characters
	new_form = new_form.replace(/&quot;/gi, '"');

	// need the saved form as an object
	// TODO: catch parse errors and load empty state
	new_form = JSON.parse(new_form);

	if (!new_form.fields.length) return false;

	// show the bakery header and footer with saved values
	Bakery.set_state.active();
	Bakery.set.header({form_name: new_form.form_name});
	Bakery.set.footer({owner_name: new_form.owner_name, owner_email: new_form.owner_email});


	// for each field in saved form fields
	$(new_form.fields).each(function(i) {

		var fld = new_form.fields[i],
			fld_wrapper = render(TEMPLATES.field, {'field_type': fld.type});
		
		_.my_form
			.append(fld_wrapper)
			.find('> li:last-child').fadeIn()
			.html(function() {
				// Render the input field with saved options and append to field wrapper (this)
				Field.make(fld.type, this, fld);
			});

		if (fld.type == 'el_radio' || fld.type == 'el_check') {
			FIELDS[fld.type].item.dd();
		}
	});

};

Bakery.form_to_json = function() {
	var form = {
		form_name: $('.form_name', _.header).val(),
		owner_name: $('.owner_name', _.footer).val(),
		owner_email: $('.owner_email', _.footer).val(),
		fields: []
	};

	$('> li', _.my_form).each(function(i) {
		var field_type = $(this).attr('field-type');

		// takes field and returns json representation
		var field = FIELDS[field_type].to_json(this);

		field.index = i;
		field.type = field_type;
		form.fields[field.index] = field; // append field to fields list
	});

	return JSON.stringify(form);
};

Bakery.save_form = function() {
	var data = {
		'form_json': Bakery.form_to_json()
	};

	// save form in session
	$.ajax({
		url: '/save_form/',
		type: 'POST',
		dataType: 'json',
		async: false,
		data: data
	});
};

Bakery.get_form = function() {
	var form = '',
		data = {};

	// get uuid in js because we need to get form
	if ($.urlParam('uuid')) data.uuid = $.urlParam('uuid');

	// return saved form from session
	$.ajax({
		url: '/get_form/',
		type: 'GET',
		async: false,
		success: function(data) {
			if (data && data !== '') form = data;
		}
	});

	return form;
};


/*
	Hold a bunch of functions that show certain tips to the user
	Trigger this from any part of the code base as necessary
*/
Bakery.hints = {
	fieldName: function() {
		// show tooltip on first drop
		// if the user has not filled in a name in x seconds
		// by waiting for while, we allow power users to
		// fill in a name without a hint
		setTimeout(function() {
			var first_field_in_form = _.my_form.find('> li:first-child .interface > .name');

			// if a name is entered, skip this
			if (first_field_in_form.val()) {
				Bakery.hints.fieldOption();
				return;
			}

			Tooltip.show({
				message: 'Give this field a name! \'Untitled\' doesn\'t do it justice',
				x: 100,
				y: 105,
				showDelay: 0,
				duration: 4000,
				after: function() {
					Bakery.hints.fieldOption();
				}
			});

		}, 1000);
	},
	fieldOption: function() {
		var first_field_in_form = _.my_form.find('> li:first-child');

		// field show exist and options should not be selected
		if (!first_field_in_form.length || first_field_in_form.hasClass('options_selected')) return;

		Tooltip.show({
			message: 'Pro Tip: There are advanced options tucked away here :-)',
			x: -40,
			y: 110,
			showDelay: 2000,
			duration: 6000,
			before: function() {
				first_field_in_form.addClass('simulate_hover');
			},
			after: function() {
				first_field_in_form.removeClass('simulate_hover');
			}
		});
	}
};

/*@~ Ingredients
-----------------------------------------*/
var Ingredients = {};

// initialize field dragables
Ingredients.init = function() {

	// for each field
	$(FIELD_TYPES).each(function(i) {
		// render the field structure and append it to ingredients
		_.ingredients.append(
		render(TEMPLATES.field_structure, {
			field_type: FIELD_TYPES[i],
			field_type_title: FIELD_TYPES_TITLES[i]
		}));
	});

	this.freshen();
	this.events();
};

Ingredients.freshen = function() {
	$('ul:empty', _.ingredients).each(function() {
		var field_type = $(this).attr('field-type');

		// append the field itself into each field structure
		$('.' + field_type, _.ingredients).append(
		render(TEMPLATES.field, {
			field_type: field_type
		})).find('li').fadeIn();
	});
};

Ingredients.events = function() {
	$('ul > li', _.ingredients).live('click', function() {
		var field_type = $(this).attr('field-type');
		Field.manualAdd(field_type);
	});
};
/*@~ Sorting
-----------------------------------------*/
var DD = {
	ingredients: {
		drag: {}
	},
	my_form: {
		drag: {}
	}
};

DD.init = function() {
	this.ingredients.init();
	this.my_form.init();
};

DD.ingredients.init = function() {
	// enable sorting on ingredients
	$('ul', _.ingredients).sortable({
		connectWith: _.my_form,
		dropOnEmpty: true,
		placeholder: 'placeholder',
		forcePlaceholderSize: true,
		// revert: true,
		start: function(e, ui) {
			DD.ingredients.drag.begin(e, ui);
			$(ui.item).css('cursor', 'move');
		},
		stop: function(e, ui) {
			$(ui.item).css('cursor', 'pointer');
		},
		remove: function(e, ui) {
			DD.ingredients.drag.drop(e, ui);
		} // item is removed from this list
	}).disableSelection();
};

// user starts dragging a field
DD.ingredients.drag.begin = function(e, ui) {

	// activate bakery so the dragged item can be dropped into it
	if (!Bakery.active) Bakery.set_state.active();

	Bakery.validateFields();
};

DD.ingredients.drag.first_drop = true;

DD.ingredients.drag.drop = function(e, ui) {
	// Field.add(field_type, container)
	// apply template to dropped field and fade in the interface
	var field_type = $(ui.item).attr('field-type');

	// add field type into dropped container node
	Field.add(field_type, ui.item);

	if (this.first_drop) {
		this.first_drop = false;

		Bakery.hints.fieldName();

		// close the top bar on first drag
		IntroBar.closeBar();
	}
};

DD.my_form.init = function() {
	// enable sorting on my_form
	$(_.my_form).sortable({
		revert: false,
		axis: 'y',
		distance: 20, // avoid drag when intention is to click
		// during a sort change
		change: function(e, ui) {
			DD.my_form.drag.change(e, ui);
		},
		start: function(e, ui) {
			$(ui.item).css('cursor', 'move');
		},
		update: function(e, ui) {
			$('> li', _.my_form).css('cursor', 'pointer');
		}
		// containment: '_.oven',
		// grid: [300, 20]
		// handle: 'h2'  // specify a handle as in the design
	});
};

// when the form is being sorted
DD.my_form.drag.change = function(e, ui) {
	// close all open options popup's and select dropdowns
	Field.close_options();
	el_select.intf.dropdown.close_all();
};
/*@~ Field
-----------------------------------------*/
var Field = {};

// given an element within a field, it will delete the field itself
Field.del = function(el) {
	$(Field.root(el)).remove();
};

Field.root = function(el) {
	return $(el).closest('li[field-type]');
};

Field.add = function(field_type, container) {
	if (!Bakery.active) {
		Bakery.set_state.active();
		Bakery.hints.fieldName();
	}

	// if a container was manually created, a class and field type attr needs to be manually added or overwritten
	container.addClass(field_type).attr('field-type', field_type);

	// make field in container
	this.make(field_type, container);
	
	// init auto grow on name field
	$(container).find('.interface > .name').focus().autoGrowInput();

	// replace removed ingredient
	Ingredients.freshen();

	if (field_type == 'el_radio' || field_type == 'el_check') {
		// initialize drag and drop on radio and checkboxes
		FIELDS[field_type].item.dd();
	}

	mixpanel.track("Form Field Added", {
		"type": field_type
	});
};

Field.manualAdd = function(field_type) {
	// crete field node and get it
	var container = _.my_form.append('<li></li>').find('> li:last-child');

	Field.add(field_type, container);
};

// renders field_type into field_node based on options given to it
Field.make = function(field_type, field_node, saved_options) {
	
	// field_type: is a string with the type of field. example "el_input"
	// field_node: where the field template should be rendered. This is a dom element, usually a list item
	// saved_options: json representation of a field. Example form.fields[3]
	var context = saved_options ? saved_options : FIELDS[field_type].defaults,
		template = render(TEMPLATES[field_type], context, true);

	// add templates to item and fade in the interface
	$(field_node)
		.append(template)
		.find('.interface').fadeIn();
};

Field.show_error = function(index, error) {
	fld_error = $('> li:nth-child(' + index + ')', _.my_form).find('.error.' + error);

	if (!fld_error.length) return false;

	fld_error
		.fadeIn()
		.click(function() {
			$(this).fadeOut('fast');
		});

	return true;
};

Field.options_hovering = false;

Field.open_options = function(fld) {
	$(fld).addClass('options_selected');
};


Field.close_options = function() {
	$('.options_selected', _.my_form).removeClass('options_selected');
};

Field.events = function() {
	// show options when options tag is clicked
	$('.options', _.my_form).live('click', function() {
		var fld = $(Field.root(this));

		// if no options are selected, show current
		if ($('.options_selected', _.my_form).length === 0) {
			Field.open_options(fld);
		}

		// if options other than current are selected, close them and open current
		else if (!fld.hasClass('options_selected')) {
			Field.close_options();
			Field.open_options(fld);
		}

		// if current option is selected, close it
		else {
			Field.close_options();
		}
	});

	// track if hovering options or not
	$('.options, .options_popup', _.my_form).live({
		mouseenter: function() {Field.options_hovering = true;},
		mouseleave: function() {Field.options_hovering = false;}
	});

	// close options dialog when document is clicked
	CALLBACKS.add('document_clicked', function() {
		if (!Field.options_hovering) {
			$('.options_selected', _.my_form).removeClass('options_selected');
		}
	});

	if (CAN_EDIT) {
		// delete tag/links should delete field
		$('.delete', _.my_form).live('click', function(e) {
			Field.del(this);
		});
	} else {
		// if the user cannot edit the form
		// remove all delete buttons
		// this is to avoid a case where a user removes all
		// their fields and cannot add a field
		$('.delete', _.my_form).remove();
	}


	$('.interface > .name', _.my_form).autoGrowInput();
	$('.form_name.editable', _.oven).autoGrowInput({maxlength: 290});
};
/*@~ el_textarea
-----------------------------------------*/
var el_textarea = {
	intf: {
		options: {}
	}
};

// responsible for initializing all necessary components/events required for interactions with el_textarea interface
el_textarea.init = function() {
	this.intf.events();
};

el_textarea.defaults = {
	name: '',
	name_placeholder: 'Untitled',
	required: true
};

// takes an el_textarea field and returns its json representation
el_textarea.to_json = function(fld) {
	fld = $(fld);
	
	// merge param2 into param1, recursively
	var options = $.extend(true, {}, this.defaults);
	
	options.name = fld.find('input.name').val() || el_check.defaults.name;
	options.required = !!(fld.find('.required input:checked').length);
	
	return options;
};


/*@~ events
-----------------------------------------*/
el_textarea.intf.events = function() {
};

/*@~ el_input
-----------------------------------------*/
var el_input = {
	intf: {
		options: {}
	}
};

// responsible for initializing all necessary components/events required for interactions with el_input interface
el_input.init = function() {
	this.intf.events();
};

el_input.defaults = {
	name: '',
	name_placeholder: 'Untitled',
	required: true,
	field_validation: ''
};

// takes an el_input field and returns its json representation
el_input.to_json = function(fld) {
	fld = $(fld);
	
	// merge param2 into param1, recursively
	var options = $.extend(true, {}, this.defaults);
	
	options.name = fld.find('input.name').val();
	options.required = !!(fld.find('.required input:checked').length);
	options.field_validation = fld.find('.field_type').find('ul').attr('class');
	
	return options;
};

/*@~ events
-----------------------------------------*/
el_input.intf.events = function() {
	var flds = $('.el_input', _.my_form);

	// changing field type within options should update <ul> wrapper class with selected field type
	$('.field_type li', flds).live('click', function(e) {
		var field_type = $(this).attr('class');
		$(this).closest('.field_type').find('ul').removeClass().addClass(field_type);
	});
};

/*@~ el_radio
-----------------------------------------*/
var el_radio = {
	intf: {},
	item: {}
};

// responsible for initializing all necessary components/events required for interactions with el_radio interface
el_radio.init = function() {
	this.intf.events();
	this.item.dd();
};

// default properties that the radio field can have, also used as a template dict when rendering
el_radio.defaults = {
	name: '',
	name_placeholder: 'Untitled',
	items: [{index:0, name:'', name_placeholder:'Untitled', selected:'true'}, {index:0, name:'', name_placeholder:'Untitled'}, {index:0, name:'', name_placeholder:'Untitled'}]
};

// {name: 'Untitled', items: [{index:0, name:'Untitled', selected:'true'}]}
// takes an el_radio field and returns its json representation
el_radio.to_json = function(fld) {
	fld = $(fld);
	
	// duplicate defaults
	var options = $.extend(true, {}, this.defaults);
	
	// update options with values from the fld interface
	options.name = fld.find('.interface > input.name').val() || el_radio.defaults.name;

	options.items = []

	// loop through each item in the radio item list
	$('.radio_list > li', fld).each(function(i) {
		// add the item object to the items list
		options.items[i] = {
			index: i,
			name: $('.name', this).val() || el_check.defaults.items[0].name,
			name_placeholder: 'Untitled',
			selected: $('.radio_button', this).hasClass('selected')
		}
	});

	return options;
};

el_radio.item.root = function(el) {
	return $(el).closest('li.radio_item');
}

// drag and drop
el_radio.item.dd = function(fld) {

	// init sortable on a certain fld if provided else apply to all select fields
	fld = fld === undefined ? $('.el_radio', _.my_form) : fld;

	$('.radio_list', fld).sortable({
		revert: false,
		axis: 'y',
		distance: 20,
		// avoid drag when intention is to click
		change: function(e, ui) {
			// dd.my_form.drag.change(e, ui);
		} // during a sort change
		// containment: '_.oven',
		// grid: [300, 20]
		// handle: 'h2'  // specify a handle as in the design
	});
};

el_radio.item.add = function(fld) {

	// get item name
	var new_item_name = $('.new_item_name', fld).val();

	// clear item name so a new name can be typed
	$('.new_item_name', fld).val('');

	var template_dict = {
		name: new_item_name.length ? new_item_name : el_radio.defaults.name,
		name_placeholder: el_radio.defaults.name_placeholder
	};

	var radio_item = render(TEMPLATES.el_radio_item, template_dict, true);
	$('.radio_list', fld).append(radio_item);

	el_radio.item.dd(fld);
};

el_radio.item.select = function(radio_button) {
	var flds = $('.el_radio', _.my_form);
	
	// if select is triggered on already selected checkbox, unselect it
	if ($(radio_button).hasClass('selected')) {
		$(radio_button).removeClass('selected');
		return;
	}

	// unselect all checks
	$('.radio_button', flds).removeClass('selected');

	// select current one
	$(radio_button).addClass('selected');
};

el_radio.item.del = function(radio_item) {
	$(radio_item).remove();
};


/*@~ events
-----------------------------------------*/
el_radio.intf.events = function() {
	var flds = $('.el_radio', _.my_form);

	// add item to check list
	$(".new_item_name", flds).live('keyup', function(e) {
		if (e.which == 13) {
			// Enter key pressed
			el_radio.item.add( Field.root(this) );
		}
	});

	// make item selected
	$('.radio_button', flds).live('click', function(e) {
		el_radio.item.select(this);
	});

	// delete item in list
	$('.delete_item', flds).live('click', function(e) {
		el_radio.item.del( el_radio.item.root(this) );
	});
};

/*@~ el_check
-----------------------------------------*/
var el_check = {
	intf: {},
	item: {}
};

// responsible for initializing all necessary components/events required for interactions with el_check interface
el_check.init = function() {
	this.intf.events();
	this.item.dd();
};

// default properties that the check field can have, also used as a template dict when rendering
el_check.defaults = {
	name: '',
	name_placeholder: 'Untitled',
	items: [{index:0, name:'', name_placeholder:'Untitled', selected:'true'}, {index:0, name:'', name_placeholder:'Untitled'}, {index:0, name:'', name_placeholder:'Untitled'}]
};

// {name: 'Untitled', items: [{index:0, name:'Untitled', selected:'true'}]}
// takes an el_check field and returns its json representation
el_check.to_json = function(fld) {
	fld = $(fld);
	
	// duplicate defaults
	var options = $.extend(true, {}, this.defaults);
	
	// update options with values from the fld interface
	options.name = fld.find('.interface > input.name').val() || el_check.defaults.name;

	options.items = [];

	// loop through each item in the check item list
	$('.check_list > li', fld).each(function(i) {
		// add the item object to the items list
		options.items[i] = {
			index: i,
			name: $('.name', this).val() || el_check.defaults.items[0].name,
			name_placeholder: 'Untitled',
			selected: $('.check_button', this).hasClass('selected')
		};
	});

	return options;
};

el_check.item.root = function(el) {
	return $(el).closest('li.check_item');
};

// drag and drop
el_check.item.dd = function(fld) {

	// init sortable on a certain fld if provided else apply to all select fields
	fld = fld === undefined ? $('.el_check', _.my_form) : fld;

	// TODO: Should only run on first run
	$('.check_list', fld).sortable({
		revert: false,
		axis: 'y',
		distance: 20,
		// avoid drag when intention is to click
		change: function(e, ui) {
			// dd.my_form.drag.change(e, ui);
		} // during a sort change
		// containment: '_.oven',
		// grid: [300, 20]
		// handle: 'h2'  // specify a handle as in the design
	});
};


el_check.item.add = function(fld) {

	// get item name
	var new_item_name = $('.new_item_name', fld).val();

	// clear item name so a new name can be typed
	$('.new_item_name', fld).val('');

	var template_dict = {
		name: new_item_name.length ? new_item_name : el_check.defaults.name,
		name_placeholder: el_radio.defaults.name_placeholder
	};

	var check_item = render(TEMPLATES.el_check_item, template_dict, true);
	$('.check_list', fld).append(check_item);

	el_check.item.dd(fld);
};

el_check.item.select = function(check_button) {
	var flds = $('.el_check', _.my_form);

	// if select is triggered on already selected checkbox, unselect it
	if ($(check_button).hasClass('selected')) {
		$(check_button).removeClass('selected');
		return;
	}

	// select current one
	$(check_button).addClass('selected');
};

el_check.item.del = function(check_item) {
	$(check_item).remove();
};


/*@~ events
-----------------------------------------*/
el_check.intf.events = function() {
	var flds = $('.el_check', _.my_form);

	// add item to check list
	$(".new_item_name", flds).live('keyup', function(e) {
		if (e.which == 13) {
			// Enter key pressed
			el_check.item.add( Field.root(this) );
		}
	});

	// make item selected
	$('.check_button', flds).live('click', function(e) {
		el_check.item.select(this);
	});

	// delete item in list
	$('.delete_item', flds).live('click', function(e) {
		el_check.item.del( el_check.item.root(this) );
	});
};

/*@~ el_select
-----------------------------------------*/
var el_select = {
	intf: {
		dropdown: {}
	},
	item: {}
};

// responsible for initializing all necessary components/events required for interactions with el_select interface
el_select.init = function() {
	this.intf.events();
	this.item.dd();
};

// default properties that the select field can have, also used as a template dict when rendering
el_select.defaults = {
	name: '',
	name_placeholder: 'Untitled',
};

// {name: 'Untitled', items: [{index:0, name:'Untitled'}]}
// takes an el_select field and returns its json representation
el_select.to_json = function(fld) {
	fld = $(fld);
	
	// duplicate defaults
	var options = $.extend(true, {}, el_select.defaults);
	
	// update options with values from the fld interface
	options.name = fld.find('.interface > input.name').val() || el_select.defaults.name;

	options.items = [];

	// loop through each item in the select item list
	$('.select_item', fld).each(function(i) {
		// add the item object to the items list
		options.items[i] = {
			index: i,
			name: $('.item_name', this).val(),
			name_placeholder: 'Untitled'
		};
	});

	return options;
};

el_select.item.root = function(el) {
	return $(el).closest('li.select_item');
};

// drag and drop
el_select.item.dd = function(fld) {

	// init sortable on a certain fld if provided else apply to all select fields
	fld = fld === undefined ? $('.el_select', _.my_form) : fld;

	$('.select_list', fld).sortable({
		revert: false,
		axis: 'y',
		distance: 20,
		// avoid drag when intention is to click
		change: function(e, ui) {
			// dd.my_form.drag.change(e, ui);
		} // during a sort change
		// containment: '_.oven',
		// grid: [300, 20]
		// handle: 'h2'  // specify a handle as in the design
	});
};

el_select.item.add = function(fld) {

	// get item name
	var new_item_name = $('.new_item_name', fld).val();
	
	var template_dict = {
		name: new_item_name.length ? new_item_name : el_select.defaults.name,
		name_placeholder: el_select.defaults.name_placeholder
	};

	var select_item = render(TEMPLATES.el_select_item, template_dict, true);
	$('.select_list', fld).append(select_item);


	// TODO: Figure out how not to check if empty all the time
	if ($('.select_item', fld).length) {
		$('.dropdown', fld).removeClass('state_empty');
	}

	el_select.item.dd(fld);
};

el_select.item.del = function(select_item) {
	// if this is the last item in the list to be deleted, show empty message and then delete
	if ($('.select_item', Field.root(select_item)).length == 1) {
		$('.dropdown', Field.root(select_item)).addClass('state_empty');
	}
	$(select_item).remove();
};

el_select.intf.dropdown.hovering = false;

el_select.intf.dropdown.toggle = function(fld) {
	var flds = $('.el_select', _.my_form);

	// if already open, close it
	if ( $('.dropdown', fld).hasClass('selected') ) {
		el_select.intf.dropdown.close_all();
	} else {
		el_select.intf.dropdown.close_all();
		el_select.intf.dropdown.open(fld);
	}
};

el_select.intf.dropdown.open = function(fld) {
	$(fld).css('z-index', '10000')
		.find('.dropdown').show().addClass('selected');
	$(".new_item_name", fld).focus();
};

el_select.intf.dropdown.close_all = function() {
	var flds = $('.el_select', _.my_form);
	$(flds).css('z-index', '1').find('.dropdown').removeClass('selected').hide();
};


/*@~ events
-----------------------------------------*/
el_select.intf.events = function() {
	var flds = $('.el_select', _.my_form);

	// delete item in list
	$('.del_item', flds).live('click', function(e) {
		el_select.item.del( el_select.item.root(this) );
	});

	// toggle dropdown when select is clicked
	$('div.select', flds).live('click', function(e) {
		el_select.intf.dropdown.toggle( Field.root(this) );
	});

	// add item on pressing enter
	$(".new_item_name", flds).live('keyup', function(e) {
		if (e.which == 13) {
			// Enter key pressed
			el_select.item.add( Field.root(this) );

			// clear item name so a new name can be typed
			$(this).val('');
		}
	});

	// track if hovering options or not
	$('.dropdown, div.select', _.my_form).live({
		mouseenter: function() {el_select.intf.dropdown.hovering = true;},
		mouseleave: function() {el_select.intf.dropdown.hovering = false;}
	});

	// close options dialog when document is clicked
	CALLBACKS.add('document_clicked', function() {
		if (!el_select.intf.dropdown.hovering) {
			el_select.intf.dropdown.close_all();
		}
	});
};

/*@~ Global vars
-----------------------------------------*/
FIELD_TYPES = ['el_input', 'el_textarea', 'el_radio', 'el_check', 'el_select' ];
FIELD_TYPES_TITLES = [
	'Input field',
	'Textarea field',
	'Radio list',
	'Checkbox list',
	'Select dropdown'
	];

// map each field to their respective classes
// makes it easier to call FIELDS[field_type].make()
// TODO: make FIELDS the actual object that contains the sub objects
FIELDS = {
	'el_input': el_input,
	'el_radio': el_radio,
	'el_check': el_check,
	'el_textarea': el_textarea,
	'el_select': el_select
};

BAKERY_TEMPLATES = getTemplates([
	'bakery_structure',
	'field_structure',
	'field',
	'blank',
	'header',
	'footer',
	'complete_form',
	'el_radio_item',
	'el_check_item',
	'el_select_item',
	'el_input',
	'el_radio',
	'el_check',
	'el_textarea',
	'el_select'
]);

TEMPLATES = $.extend({}, BAKERY_TEMPLATES, TEMPLATES);


/*@~ Events and callbacks
-----------------------------------------*/

// trigger the callback as an event occurs
// in this case, when the document is clicked
$('html').click(function() {
	CALLBACKS.trigger('document_clicked');
});

/*@~ Init
-----------------------------------------*/

Bakery.init();
if (CAN_EDIT) Ingredients.init();
DD.init();
Field.events();

for (var i in FIELD_TYPES) {
	FIELDS[ FIELD_TYPES[i] ].init();
}

</script>
		
		
		
		