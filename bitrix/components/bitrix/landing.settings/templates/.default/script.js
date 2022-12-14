this.BX = this.BX || {};
this.BX.Landing = this.BX.Landing || {};
(function (exports,main_core,main_loader) {
	'use strict';

	var _templateObject;
	var LandingSettings = /*#__PURE__*/function () {
	  /**
	   * Constructor.
	   */
	  function LandingSettings(options) {
	    var _this = this;

	    babelHelpers.classCallCheck(this, LandingSettings);
	    this.siteId = options.siteId;
	    this.landingId = options.landingId; // pages

	    this.pages = options.pages;
	    this.container = document.getElementById(options.containerId);
	    this.loader = new main_loader.Loader({
	      target: this.container
	    });

	    for (var page in this.pages) {
	      this.pages[page].container = main_core.Tag.render(_templateObject || (_templateObject = babelHelpers.taggedTemplateLiteral(["<div class=\"landing-settings-page-container\"></div>"])));
	      main_core.Dom.append(this.pages[page].container, this.container);
	    }

	    this.loadingPages = []; // links

	    this.links = document.getElementById(options.menuId).querySelectorAll('li a');
	    var currentLink = this.links[0];
	    this.links.forEach(function (link) {
	      main_core.Event.bind(link, 'click', function (event) {
	        event.preventDefault();
	        event.stopPropagation();

	        _this.onLinkClick(link);
	      });

	      if (link.dataset.page && _this.pages[link.dataset.page] && _this.pages[link.dataset.page].current === true) {
	        currentLink = link;
	      }
	    });

	    if (currentLink) {
	      this.onLinkClick(currentLink);
	    } // save


	    this.saveButton = document.getElementById(options.saveButtonId);
	    this.onSave = this.onSave.bind(this);
	    main_core.Event.bind(this.saveButton, 'click', this.onSave);
	  }

	  babelHelpers.createClass(LandingSettings, [{
	    key: "onLinkClick",
	    value: function onLinkClick(link) {
	      if (link.dataset.page) {
	        this.onPageChange(link.dataset.page);
	      } else if (link.dataset.placement) {
	        // for open app pages in slider
	        if (typeof BX.rest !== 'undefined' && typeof BX.rest.Marketplace !== 'undefined') {
	          BX.rest.Marketplace.bindPageAnchors({});
	        }

	        BX.rest.AppLayout.openApplication(link.dataset.appId, {
	          SITE_ID: this.siteId,
	          LID: this.landingId
	        }, {
	          PLACEMENT: link.dataset.placement,
	          PLACEMENT_ID: link.dataset.placementId
	        });
	      }
	    }
	  }, {
	    key: "onPageChange",
	    value: function onPageChange(page) {
	      var _this2 = this;

	      var currPage = this.pages[page];

	      if (currPage) {
	        if (currPage.container.childNodes.length === 0) {
	          this.loader.show();
	          this.loadingPages.push(page);
	          main_core.ajax.get(currPage.link, function (result) {
	            currPage.container.innerHTML = result;

	            _this2.loadingPages.splice(_this2.loadingPages.indexOf(page), 1);

	            if (_this2.loadingPages.length === 0) {
	              _this2.loader.hide();
	            }

	            var form = currPage.container.querySelector('.ui-form');

	            if (form) {
	              currPage.form = form;
	            }
	          });
	        }

	        for (var _page in this.pages) {
	          this.pages[_page].container.hidden = true;
	        }

	        currPage.container.hidden = false;
	      }
	    }
	  }, {
	    key: "onSave",
	    value: function onSave() {
	      var _this3 = this;

	      this.loader.show();
	      var submits = [];

	      for (var page in this.pages) {
	        var currPage = this.pages[page];

	        if (currPage.form) {
	          submits.push(fetch(currPage.linkToSave, {
	            method: 'POST',
	            body: new FormData(currPage.form),
	            headers: {
	              'Bx-ajax': true
	            }
	          }));
	        }
	      }

	      Promise.all(submits).then(function (results) {
	        var all = true;
	        results.forEach(function (result) {
	          all = all && result.ok;
	        });

	        if (all) {
	          top.window['landingSettingsSaved'] = true;
	          top.BX.onCustomEvent('BX.Landing.Filter:apply');

	          _this3.loader.hide();

	          top.window.location.reload();
	          BX.SidePanel.Instance.close();
	        }
	      })["catch"](function (err) {
	        console.error(err);
	      });
	    }
	  }]);
	  return LandingSettings;
	}();

	exports.LandingSettings = LandingSettings;

}((this.BX.Landing.Component = this.BX.Landing.Component || {}),BX,BX));
//# sourceMappingURL=script.js.map
