// File             : utils.js
// Programmer       : John Wong
// Copyright (c) Q-Surf Computing Solutions, 2003-05. All rights reserved.
// http://www.q-surf.com/

function LTrim(str){
	var n1 = new String(str)
	var i = 0
	
	for (i = 0 ; i < n1.length; i ++){
	    if(n1.charAt(i) != " "&&
	    n1.charAt(i) != "\r" &&
	    n1.charAt(i) != "\n"&&
	    n1.charAt(i) != "\t"){
			break
	    }
	}
	return n1.substr(i, n1.length - i);    
}

function RTrim(str){
    var n1 = new String(str)
    var i = 0
    for (i = n1.length - 1; i > 0; i --){
		if(n1.charAt(i) != " "&&
		n1.charAt(i) != "\r" &&
		n1.charAt(i) != "\n"&&
		n1.charAt(i) != "\t"){
		    break
		}
    }
	return n1.substr(0, i + 1);    
}

function Trim(str) {
	return LTrim(RTrim(str))
}

function IsValidInteger(str) {
	var n1 = new String(str)
	for (i = 0; i < n1.length; i ++) {
	    if(n1.charAt(i) < "0" || n1.charAt(i) > "9") {
	        return false
	    }
	}    
	return true
}

function HtmlSpecialChars(str){
	var mystr = new String(str)
	var re
	re = /&/g;
	mystr = mystr.replace(re, "&amp;");
	re = /\"/g;
	mystr = mystr.replace(re, "&quot;");
	re = /</g;
	mystr = mystr.replace(re, "&lt;");
	re = />/g;
	mystr = mystr.replace(re, "&gt;");
	re = new RegExp(String.fromCharCode(160), "g")
	mystr = mystr.replace(re, "&nbsp;");
	return mystr
}

function IsHtmlText(str){
	var mystr = new String(str)
	var re=/<(p|h1|h2|h3|h4|h5|h6|table|td|tr|ul|ol|li|b|i|u|strong|em|strike|super|sup|big|small|body|html|br|hr|font|blockquote|pre|tt|script)>/i;
	if(re.test(mystr)) return true
	re = /(&[a-zA-Z]{2,5};|&#[0-9]{1,5};)/i;
	if(re.test(mystr)) return true
	return false
}

function PlainTextToHtml(str){
	var mystr = new String(str)
	var re
	re = /\r\n/g;
	mystr = mystr.replace(re, "<br />");
	re = /\n/g;
	mystr = mystr.replace(re, "<br />");
	re = /\r/g;
	mystr = mystr.replace(re, "<br />");
	re = /  /g;
	mystr = mystr.replace(re, " &nbsp;");
	re = /\t/g;
	mystr = mystr.replace(re, " &nbsp; &nbsp;");
	return mystr;
}

function HtmlToPlainText(str, strImage){
	var mystr = new String(str)
	var re
	re = />\r\n/g
	mystr = mystr.replace(re, ">");
	re = />\r/g
	mystr = mystr.replace(re, ">");
	re = />\n/g
	mystr = mystr.replace(re, ">");
	re = /\r\n/g
	mystr = mystr.replace(re, " ");
	re = /\r/g
	mystr = mystr.replace(re, " ");
	re = /\n/g
	mystr = mystr.replace(re, " ");
    if (strImage) {
     re = /<img[^>]*>|<object[^>]*>|<embed[^>]*>/ig
     mystr = mystr.replace(re, strImage)
    }
	re = /<\/p[^>]*>|<\/h1[^>]*>|<\/h2[^>]*>|<\/h3[^>]*>|<\/h4[^>]*>|<\/h5[^>]*>|<\/h6[^>]*>|<\/blockquote[^>]*>|<\/ul[^>]*>|<\/ol[^>]*>/gi
	mystr = mystr.replace(re, "\n\n")
	re = /<br[^>]*>/gi
	mystr = mystr.replace(re, "\n")
	re = /<li[^>]*>/gi
	mystr = mystr.replace(re, "\n  * ")
	re = /<\/td[^>]*>/gi
	mystr = mystr.replace(re, "  ")
	re = /<hr[^>]*>/gi
	mystr = mystr.replace(re, "\n-------------------------------\n")
	re = /<[^>]*>/gi
	mystr = mystr.replace(re, "")
	// need to convert html entities back to original chars.
	// but not necessary for qwebeditor
	return mystr
}

function GetInnerTextById(id){
    if(!document.getElementById) return ""
    var node = document.getElementById(id)
    if(node){
		if(is_ie) return node.innerText
		else{
			var html = document.createRange()
			html.selectNodeContents(node);
			return html.toString();
		}
    }
    return ""
}

function GetAnnoymousFunctionString(str){
	var str2 = new String(str)
	var arr = str2.split("\n")
	var newstr = new String()
	for (var i = 2; i < arr.length - 1; i ++) {
	    newstr = arr[i] + "\n"
	}
	return "javascript: " + HtmlSpecialChars(Trim(newstr))
}

function GetAttributesStringFromNode(node, basehref, bSafe){
	if(!node || !node.attributes) return ""
	
	var str = new String()
	for (var i = 0; i < node.attributes.length; i ++) {
		var attr = node.attributes[i]
		var name = attr.name
		var value = attr.value
		var tagname = node.tagName.toLowerCase()
		
		// invalid name. skip
		if(!name)continue
		name = name.toLowerCase()
		
		// safe html and attribute is "on" handler? skip
		if(bSafe&&name.substring(0,2)=="on")continue
		
		// IE enum. attributes with default values. get rid of them
		if(is_ie) {
			if(!value) continue
			if(value=="null") continue
			if(name=="hidefocus"&&value=="false") continue
			if(name=="disabled"&&value=="false") continue
			if(name=="tabindex"&&value=="0") continue
			if(name=="contenteditable"&&value=="inherit") continue
			if(tagname=="script"&&name=="defer"&&value=="false") continue
			if(tagname=="div"&&name=="nowrap"&&value=="false") continue
			if(tagname=="td" || tagname=="th") {
			    if((name=="colspan"||name=="rowspan")&&value=="1") continue
			    if(name=="nowrap"&&value=="false") continue
			}
			if(tagname=="table") {
			    if(name=="cols"&&value=="0") continue
			    if(name=="datapagesize"&&value=="0") continue
			}
			if(tagname=="body"&&name=="nowrap"&&value=="false") continue
			if(tagname=="form") {
			    if(name=="accept-charset"&&value=="UNKNOWN") continue
			    if(name=="enctype"&&value=="application/x-www-form-urlencoded") continue
			}
			if(tagname=="textarea") {
			    if(name=="cols"&&value=="20") continue
			    if(name=="rows"&&value=="2") continue
			    if(name=="readonly"&&value=="false") continue
			    if(name=="wrap"&&value=="soft") continue
			}
			if(tagname=="input") {
				if(name=="start"&&value=="fileopen") continue
				if(name=="readonly"&&value=="false") continue
				if(name=="height"&&value=="0") continue
				if(name=="hspace"&&value=="0") continue
				if(name=="maxlength"&&value > 10000) continue
				if(name=="loop"&&value=="1") continue
				if(name=="checked"&&value=="false") continue
				if(name=="indeterminate"&&value=="false") continue
				if(name=="width"&&value=="0") continue
				if(name=="vspace"&&value=="0") continue
				if(name=="size"&&value=="20") continue
				if(node.type=="radio" || node.type=="checkbox") {
				    if(name=="value"&&value=="on") continue
				}
			}
			if(tagname=="select") {
			    if(name=="multiple"&&value=="false") continue
			    if(name=="size"&&value=="0") continue
			}
			if(tagname=="img") {
			    if(name=="start"&&value=="fileopen") continue
			    if(name=="hspace"&&value=="0") continue
			    if(name=="loop"&&value=="1") continue
			    if(name=="vspace"&&value=="0") continue
			    if(name=="ismap"&&value=="false") continue
			}
			if(tagname=="li"&&name=="value"&&value=="0") continue
			if(tagname=="ol" || tagname=="ul") {
			    if(name=="compact"&&value=="false") continue
			    if(name=="start"&&value=="1") continue
			}
		}
		else {
		    if(name.substring(0,5)=="_moz_") continue
		    if(name=="type"&&value=="_moz") continue
		}
		
		var re = /checked|selected|disabled|multiple/i
		if(re.test(name))
		    str += " " + name + "=\"" + HtmlSpecialChars(name) + "\""
		else {
		    // convert URL to relative
		    if((name=="src" || name=="href")&&basehref&&basehref.length&&value.substring(0, basehref.length)==basehref)
		        str += " " + name + "=\"" + HtmlSpecialChars(value.substring(basehref.length)) + "\""
		    else
		        str += " " + name + "=\"" + HtmlSpecialChars(value) + "\""
		}
	}
	
	// IE does not expose unload and onunload events, and style in attributes collection
	if(is_ie) {
		if(node.style&&node.style.cssText) {
			// convert all css attribute names to lower case
			var str2 = new String(node.style.cssText)
			var str3 = new String()
			var arr = str2.split(";")
			for (var i = 0; i < arr.length; i ++) {
			    var arr2 = arr[i].split(":")
			    str3 += arr2[0].toLowerCase() + ": " + arr2[1] + "; "
			}
			str += " style=\"" + str3 + "\""
		}
		
		if(node.onbeforeunload) str += "\nonbeforeunload=\"" + GetAnnoymousFunctionString(node.onbeforeunload) + "\""
		if(node.onload) str += "\nonload=\"" + GetAnnoymousFunctionString(node.onload) + "\""
		if(node.onunload) str += "\nonunload=\"" + GetAnnoymousFunctionString(node.onunload) + "\""
	}
	
	return str
}

function GetInnerHtmlFromNode(node, basehref, bSafe){
    if(!node || !node.childNodes) return ""

    var str = new String()
    for (var i = 0; i < node.childNodes.length; i ++) {
        var curNode =node.childNodes[i]
        switch (curNode.nodeType) {
        case 1: // element node
            var tagname = curNode.tagName.toLowerCase()
            if(tagname.substring(0,1)=="/") continue
            
            // skip script tag for "safe" html code
            if(bSafe&&tagname=="script") continue

            // output linefeed before these opening tags
            if(is_ie) {
				switch (tagname) {
				case "html":
				case "body":
				case "head":
				case "meta":
	               	str = str + "\n"
					break
				}
            }

            str += "<" + tagname + GetAttributesStringFromNode(curNode, basehref, bSafe)
            var re = /br|hr|input|img/i
            if(re.test(tagname)) {
                str += " />"
                break
            }

            str += ">"

            // output linefeed after these opening tags
			switch (tagname) {
			case "html":
			case "body":
			case "head":
			case "table":
			case "tr":
			case "tbody":
			case "thead":
			case "tfoot":
			case "ul":
			case "ol":
			case "select":
               	str = str + "\n"
				break
			}

            if(is_ie){
                // IE wont return value of some of the tags from nodeValue
                switch (tagname)
                {
                case "title":
                    str += document.title
                    break
                case "style":
                case "script":
                    str += Trim(curNode.innerHTML)
                    break
                default:
                	var str2 = GetInnerHtmlFromNode(curNode, basehref, bSafe)

					switch (tagname)
					{
					case "div":
					case "p":
					case "h1":
					case "h2":
					case "h3":
					case "h4":
					case "h5":
					case "h6":
					case "li":
						var str3 = HtmlToPlainText(str2)
						if(str3.length==0&&!str2.match(/<img/)) str2 += "&nbsp;"
					}                	
                    str += str2
                    break
                }
            }
            else {
                switch (tagname) {
                case "style":
                case "script":
                    str += Trim(curNode.innerHTML)
                    break
                default:
                	var str2 = GetInnerHtmlFromNode(curNode, basehref, bSafe)
					// better to output a space between empty div tag for insertion pt.    
					if(str2.length==0&&tagname=="div") str2 = "&nbsp;"
                    str += str2
                    break
                }
            }

            if(is_ie) {
				switch (tagname) {
				case "html":
				case "body":
				case "head":
                	str = str + "\n"
					break
				}
            }
            else {
				switch (tagname) {
				case "html":
                	str = str + "\n"
					break
				}
            }

            str += "</" + tagname + ">"

			switch (tagname) {
			case "html":
			case "body":
			case "head":
			case "title":
			case "div":
			case "p":
			case "h1":
			case "h2":
			case "h3":
			case "h4":
			case "h5":
			case "h6":
			case "blockquote":
			case "ul":
			case "ol":
			case "li":
			case "tr":
			case "td":
			case "tbody":
			case "thead":
			case "tfoot":
			case "option":
            	str = str + "\n"
			}

            break
        case 3: // text node
            str = str + HtmlSpecialChars(curNode.nodeValue)
            break
        case 8: // comment node
            str = str + "<!--" + HtmlSpecialChars(curNode.nodeValue) + (is_ie ? "\n-->" : "-->")
            break
        }
    }
    return str
}

function CreatePopup(bForceDiv){
    if(window.createPopup&&!bForceDiv){
    	// IE way
        var obj=new Object()
        obj.objPopup=window.createPopup()
        obj.bDiv=false
        return obj
    }
    else if(document.createElement){
    	// using DOM to create an abs pos div
        var div=document.createElement("div")
        document.body.appendChild(div)
        var ds=div.style
        ds.position='absolute'
        ds.left='0px'
        ds.top='0px'
        ds.width='1px'
        ds.height='1px'
        ds.visibility='hidden'
        ds.zIndex=10
        var obj=new Object()
        obj.objPopup=div
        obj.bDiv=true
        return obj
    }
    return null
}

function PopupGetContent(obj){
    if(!obj || !obj.objPopup) return
    return (!obj.bDiv) ? obj.objPopup.document.body.innerHTML : obj.objPopup.innerHTML
}

function PopupSetContent(obj,content){
    if(!obj || !obj.objPopup) return
    if(!obj.bDiv)
        obj.objPopup.document.body.innerHTML=content
    else
        obj.objPopup.innerHTML=content
}

function PopupShow(obj,left,top,width,height,element,bCenter){
	if(!obj || !obj.objPopup) return
	var newLeft
	var newTop
	newLeft=(bCenter)?((element.offsetWidth-width)/2):left
	newTop=(bCenter)?((element.offsetHeight-height)/2):top
	if(!obj.bDiv)
	    obj.objPopup.show(newLeft,newTop,width+4,height+4,element)
	else{
		newLeft+=getOffsetLeft(element)
		newTop+=getOffsetTop(element)
		if(isNaN(newLeft)) newLeft=0
		if(isNaN(newTop)) newTop=0
		if(newLeft+width>window.innerWidth-20+window.scrollX)
		    newLeft=window.innerWidth-width-20+window.scrollX
		if(newTop+height>window.innerHeight-20+window.scrollY)
		    newTop=window.innerHeight-height-20 +window.scrollY
		var os=obj.objPopup.style
		os.left=newLeft+"px"
		os.top=newTop+"px"
		os.width=width+"px"
		os.height=height+"px"
		os.visibility="visible"
	}
}

function PopupHide(obj){
	if(!obj || !obj.objPopup) return
	if(!obj.bDiv)obj.objPopup.hide()
	else{
		var os=obj.objPopup.style
		os.visibility="hidden"
		os.left="-300px"
		os.top="0px"
		os.width="1px"
		os.height="1px"
	}
}

function getOffsetTop(elm){
	var mOT=elm.offsetTop;
	var mOP=elm.offsetParent;
	while(mOP){
		mOT+=mOP.offsetTop;
		mOP=mOP.offsetParent;
	}
	return mOT;
}

function getOffsetLeft(elm){
    var mOL=elm.offsetLeft;
    var mOP=elm.offsetParent;
    while(mOP){
		mOL+=mOP.offsetLeft
		mOP=mOP.offsetParent
    }
    return mOL;
}

function StyleSheetCreate(doc){
	if(is_gecko){
		var index = doc.styleSheets.length
		var head = doc.getElementsByTagName('head').item(0)
		var mystyle = doc.createElement('style')
		head.appendChild(mystyle)
		// mystyle is a style element object. need the cssstylesheet object
		return doc.styleSheets[index]
	}
	else
		return doc.createStyleSheet()
}

// url must be a abs url with protocol and domainname
function StyleSheetCreateFromUrl(doc, url){
	if(is_gecko){
		var index = doc.styleSheets.length
		var head = doc.getElementsByTagName('head').item(0)
		var mystyle = doc.createElement('link')
		mystyle.setAttribute('rel', 'stylesheet')
		mystyle.setAttribute('type', 'text/css')
		mystyle.setAttribute('href', url)
		head.appendChild(mystyle)
		// mystyle is a style element object. need the cssstylesheet object
		return doc.styleSheets[index]
	}
	else
	    return doc.createStyleSheet(url)
}

function StyleSheetAddRule(stylesheet, name, rule)
{
    if(is_gecko)
        stylesheet.insertRule(name + "{" + rule + "}", 0)
    else
        stylesheet.addRule(name, rule)
}

function StyleSheetRemoveRule(stylesheet, index)
{
    if(is_gecko)
        stylesheet.deleteRule(index)
    else
        stylesheet.removeRule(index)
}

function StyleSheetRemoveAllRules(stylesheet)
{
    if(is_gecko) {
        // dont know why gecko wont allow accessing cssRules for created stylesheet
        // just trying to delete rules until exception is caught
        var e
        try { for (;;) StyleSheetRemoveRule(stylesheet, 0) }
        catch (e) {}
    }
    else {
        while (stylesheet.rules.length) StyleSheetRemoveRule(stylesheet, 0)
    }
}

function StyleSheetGetRulesArray(stylesheet){
	if(!stylesheet) return null
	return is_ie ? stylesheet.rules : stylesheet.cssRules
}

function ObjGetCssText(obj){
	if(!obj) return
	if(!is_ie) {
		return obj.getAttribute("style")
	}
	else {
		return obj.style.cssText
	}
}
 
function ObjSetCssText(obj, cssText){
	if(!obj) return
	if(!is_ie) {
		obj.setAttribute("style", cssText)
	}
	else {
		obj.style.cssText = cssText
	}
}

function AttachEventListener(obj,strEventName,func){
	if(obj) {
		// IE
		if(obj.attachEvent) {
			obj.attachEvent("on"+strEventName,func)
			return true
		}
		// Mozilla
		else if(obj.addEventListener) {
			obj.addEventListener(strEventName,func,false)
			return true
		}
	}
	return false
}

function SetRemoveAttr(e,attr,value) {
	if (typeof(value)=="undefined"||value==null||value.length==0) {
		e.removeAttribute(attr)
	}
	else{
		e.setAttribute(attr,value)
	}
}