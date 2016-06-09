.kitjs-form-button {
	width: auto;
	height: auto;
	-webkit-appearance: none;
	border: 1px solid #ddd;
	outline: none;
	color: #111;
	text-shadow: 0 1px 1px #fff;
	cursor: pointer;
	border: 1px solid #ccc;
	padding: 0.5em 1em;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);/*去除android高亮框*/
	background-color: #eee;
	border-radius: 1em;/*圆角*/
	-webkit-transition: all 300ms ease-in 0;/*渐变动画 */
	background-image: -webkit-gradient(linear, left top, left 25, from(#fdfdfd), to(#eee));
	background-image: -moz-linear-gradient(top, #fdfdfd 0, #eee 50%);
	box-shadow: 0 1px 4px rgba(0,0,0,.3)
	text-shadow: 0 1px 0 white;
}
.kitjs-form-button:hover {
	border: 1px solid #808080;
}
.kitjs-form-button:active {
	border: 1px solid #808080;
	background-color: #fdfdfd;
	background-image: -webkit-gradient(linear, left top, left 25, from(#eee), to(#fdfdfd));
	background-image: -moz-linear-gradient(top, #eee 0, #fdfdfd 50%);
}
.kitjs-form-button.selected {
	border: 1px solid #144F71;
	background-color: #2567AB;
	color: #fff;
	background-image: -webkit-gradient(linear, left top, left 25, from(#5F9CC5), to(#396B9E));
	background-image: -moz-linear-gradient(top, #5F9CC5 0, #396B9E 50%);
	text-shadow: 0 -1px 1px #145072;
}
.kitjs-form-textbox {
	width: auto;
	height: auto;
	-webkit-appearance: none;
	border: 1px solid #ddd;
	outline: none;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);/*去除android高亮框*/
	border-radius: .3em;/*圆角*/
	-webkit-transition: box-shadow 300ms ease-in 0;/*渐变动画 */
	background-image: -webkit-gradient(linear, left top, left 25, from(#fff), color-stop(3%, #eee), to(#fff));/*渐变背景*/
}
.kitjs-form-textbox:focus {
	color: #000;
	outline: none;
	border-color: #aaa;/*获得焦点边框颜色*/
	box-shadow: 0 0 10px #aaa;/*获得焦点光晕*/
}
.kitjs-form-checkbox {
	cursor: pointer;
	-webkit-appearance: none;
	position: relative;
	outline: none;
	vertical-align: middle;
	line-height: 1em;
	height: 1em;
	width: 1em;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	margin: 0;
	border: 1px solid #ccc;
	background: none;
	-webkit-transition: box-shadow 300ms ease-in 0;
}
.kitjs-form-checkbox:hover, .kitjs-form-checkbox:active {
	border-color: #aaa;
	box-shadow: 0 0 10px #aaa;
}
.kitjs-form-checkbox:checked {
	background-color: #aaa;
	border-color: #aaa;
	box-shadow: inset 0px 0px 0px 2px white;
}

.kitjs-form-radio {
	cursor: pointer;
	-webkit-appearance: none;
	position: relative;
	outline: none;
	vertical-align: middle;
	line-height: 1em;
	height: 1em;
	width: 1em;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	margin: 0;
	border-radius: 1em;
	border: 1px solid #ccc;
	background: none;
	-webkit-transition: box-shadow 300ms ease-in 0;
}
.kitjs-form-radio:hover, .kitjs-form-radio:active {
	border-color: #aaa;
	box-shadow: 0 0 10px #aaa;
}
.kitjs-form-radio:checked {
	background-color: #aaa;
	border-color: #aaa;
	box-shadow: inset 0px 0px 0px 2px white;
}
/*
 * select外围wrap
 */
.kitjs-form-select {
	padding: 0;
	margin: 0;
	cursor: pointer;
	position: relative;
	vertical-align: middle;
	border-radius: .3em;
	-webkit-transition: box-shadow 300ms ease-in 0;/*渐变动画 */
	background-image: -webkit-gradient(linear, left top, left 25, from(#fff), color-stop(10%, #eee), to(#fff));/*渐变背景*/
}
.kitjs-form-select select {
	padding: 0;
	margin: 0;
	outline: none;
	cursor: pointer;
	font-size: 16px;
	border: 1px solid #ddd;
	border-radius: .3em;/*圆角*/
	position: relative;
	background: none;
	padding-right: 1.5em;/*给右边按钮留出距离*/
	line-height: 1em;
	-webkit-appearance: none;
	-webkit-tap-highlight-color: rgba(0, 0, 0, 0);/*去掉android高亮框*/
	outline: none;
	z-index: 1;
	vertical-align: baseline;
	-webkit-transition: all 300ms ease-in 0;
}
.kitjs-form-select select:hover, .kitjs-form-select select:active, .kitjs-form-select select:focus {
	color: #000;
	outline: none;
	border-color: #aaa;
	box-shadow: 0 0 10px #aaa;
}
/**
 * 	select箭头
 */
.kitjs-form-select:after {
	z-index: 0;
	content: ' ';
	display: block;
	position: absolute;
	width: 0px;
	height: 0px;
	right: 0.3em;
	top: 0.4em;
	border-width: 8px;
	border-style: dashed;
	border-color: transparent;
	border-top-style: solid;
	border-top-color: #ccc;
	-webkit-transform: scaleX(0.8);
}
/**
 * 	select箭头在鼠标hover时高亮
 */
.kitjs-form-select:hover:after, .kitjs-form-select:active:after {
	border-top-color: #000;
}