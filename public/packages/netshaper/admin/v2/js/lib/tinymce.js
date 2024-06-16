/**
 * Bundled by jsDelivr using Rollup v2.79.1 and Terser v5.19.2.
 * Original file: /npm/@tinymce/tinymce-vue@3.2.8/lib/es2015/main/ts/index.js
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
var n,t=["onActivate","onAddUndo","onBeforeAddUndo","onBeforeExecCommand","onBeforeGetContent","onBeforeRenderUI","onBeforeSetContent","onBeforePaste","onBlur","onChange","onClearUndos","onClick","onContextMenu","onCopy","onCut","onDblclick","onDeactivate","onDirty","onDrag","onDragDrop","onDragEnd","onDragGesture","onDragOver","onDrop","onExecCommand","onFocus","onFocusIn","onFocusOut","onGetContent","onHide","onInit","onKeyDown","onKeyPress","onKeyUp","onLoadContent","onMouseDown","onMouseEnter","onMouseLeave","onMouseMove","onMouseOut","onMouseOver","onMouseUp","onNodeChange","onObjectResizeStart","onObjectResized","onObjectSelected","onPaste","onPostProcess","onPostRender","onPreProcess","onProgressState","onRedo","onRemove","onReset","onSaveContent","onSelectionChange","onSetAttrib","onSetContent","onShow","onSubmit","onUndo","onVisualAid"],e=function(n){return-1!==t.map((function(n){return n.toLowerCase()})).indexOf(n.toLowerCase())},o=function(n,t,o){var i=t.$props.value?t.$props.value:"",r=t.$props.initialValue?t.$props.initialValue:"";o.setContent(i||(t.initialized?t.cache:r)),t.$watch("value",(function(n,e){o&&"string"==typeof n&&n!==e&&n!==o.getContent({format:t.$props.outputFormat})&&o.setContent(n)})),t.$listeners.input&&function(n,t){var e=n.$props.modelEvents?n.$props.modelEvents:null,o=Array.isArray(e)?e.join(" "):e;t.on(o||"change input undo redo",(function(){n.$emit("input",t.getContent({format:n.$props.outputFormat}))}))}(t,o),function(n,t,o){Object.keys(t).filter(e).forEach((function(e){var i=t[e];"function"==typeof i&&("onInit"===e?i(n,o):o.on(e.substring(2),(function(n){return i(n,o)})))}))}(n,t.$listeners,o),t.initialized=!0},i=0,r=function(n){var t=Date.now();return n+"_"+Math.floor(1e9*Math.random())+ ++i+String(t)},s=function(n){return void 0===n||""===n?[]:Array.isArray(n)?n:n.split(" ")},a=function(){return{listeners:[],scriptId:r("tiny-script"),scriptLoaded:!1}},l=(n=a(),{load:function(t,e,o){n.scriptLoaded?o():(n.listeners.push(o),t.getElementById(n.scriptId)||function(n,t,e,o){var i=t.createElement("script");i.referrerPolicy="origin",i.type="application/javascript",i.id=n,i.src=e;var r=function(){i.removeEventListener("load",r),o()};i.addEventListener("load",r),t.head&&t.head.appendChild(i)}(n.scriptId,t,e,(function(){n.listeners.forEach((function(n){return n()})),n.scriptLoaded=!0})))},reinitialize:function(){n=a()}}),p="undefined"!=typeof global?global:"undefined"!=typeof self?self:"undefined"!=typeof window?window:{},u=function(){var n="undefined"!=typeof window?window:p;return n&&n.tinymce?n.tinymce:null},d={apiKey:String,cloudChannel:String,id:String,init:Object,initialValue:String,inline:Boolean,modelEvents:[String,Array],plugins:[String,Array],tagName:String,toolbar:[String,Array],value:String,disabled:Boolean,tinymceScriptSrc:String,outputFormat:{type:String,validator:function(n){return"html"===n||"text"===n}}},c=function(){return c=Object.assign||function(n){for(var t,e=1,o=arguments.length;e<o;e++)for(var i in t=arguments[e])Object.prototype.hasOwnProperty.call(t,i)&&(n[i]=t[i]);return n},c.apply(this,arguments)},f=function(n){return function(){var t,e,i,r=c(c({},n.$props.init),{readonly:n.$props.disabled,selector:"#"+n.elementId,plugins:(t=n.$props.init&&n.$props.init.plugins,e=n.$props.plugins,s(t).concat(s(e))),toolbar:n.$props.toolbar||n.$props.init&&n.$props.init.toolbar,inline:n.inlineEditor,setup:function(t){n.editor=t,t.on("init",(function(e){return o(e,n,t)})),n.$props.init&&"function"==typeof n.$props.init.setup&&n.$props.init.setup(t)}});null!==(i=n.element)&&"textarea"===i.tagName.toLowerCase()&&(n.element.style.visibility="",n.element.style.display=""),u().init(r)}},h={props:d,created:function(){this.elementId=this.$props.id||r("tiny-vue"),this.inlineEditor=this.$props.init&&this.$props.init.inline||this.$props.inline,this.initialized=!1},watch:{disabled:function(){this.editor.setMode(this.disabled?"readonly":"design")}},mounted:function(){if(this.element=this.$el,null!==u())f(this)();else if(this.element&&this.element.ownerDocument){var n=this.$props.cloudChannel?this.$props.cloudChannel:"5",t=this.$props.apiKey?this.$props.apiKey:"no-api-key",e=null==this.$props.tinymceScriptSrc?"https://cdn.tiny.cloud/1/"+t+"/tinymce/"+n+"/tinymce.min.js":this.$props.tinymceScriptSrc;l.load(this.element.ownerDocument,e,f(this))}},beforeDestroy:function(){null!==u()&&u().remove(this.editor)},deactivated:function(){var n;this.inlineEditor||(this.cache=this.editor.getContent(),null===(n=u())||void 0===n||n.remove(this.editor))},activated:function(){!this.inlineEditor&&this.initialized&&f(this)()},render:function(n){return this.inlineEditor?function(n,t,e){return n(e||"div",{attrs:{id:t}})}(n,this.elementId,this.$props.tagName):function(n,t){return n("textarea",{attrs:{id:t},style:{visibility:"hidden"}})}(n,this.elementId)}};export{h as default};
//# sourceMappingURL=/sm/a4689bb64c58c204ca46b7d754cd2db325fb660311084500b1b5819faebb6e15.map