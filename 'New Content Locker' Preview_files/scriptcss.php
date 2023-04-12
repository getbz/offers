/*
    ColorBox Core Style:
    The following CSS is consistent between example themes and should not be altered.
*/
#jtuov3lzzk, #t0byby1Overlay, #t0byby1Wrapper{position:absolute; top:0; left:0; z-index:99999; overflow:hidden;}
#t0byby1Overlay{position:fixed; width:100%; height:100%;}
#t0byby1MiddleLeft, #t0byby1BottomLeft{clear:left;}
#t0byby1Content{position:relative;}
#t0byby1LoadedContent{overflow:auto;}
#t0byby1Title{margin:0;}
#t0byby1LoadingOverlay, #t0byby1LoadingGraphic{position:absolute; top:0; left:0; width:100%; height:100%;}
#t0byby1Previous, #t0byby1Next, #t0byby1Close, #t0byby1Slideshow{cursor:pointer;}
.cboxPhoto{float:left; margin:auto; border:0; display:block;}
.cboxIframe{width:100%; height:100%; display:block; border:0;}
#jtuov3lzzk, #t0byby1Content, #t0byby1LoadedContent{box-sizing:content-box;}

/* 
    User Style:
    Change the following styles to modify the appearance of ColorBox.  They are
    ordered & tabbed in a way that represents the nesting of the generated HTML.
*/
#t0byby1Overlay{background:#000;}
#jtuov3lzzk{}
    #t0byby1Content{margin-top:20px;}
        .cboxIframe{background:#fff;}
        #t0byby1Error{padding:50px; border:1px solid #ccc;}
        #t0byby1LoadedContent{border:5px solid #000;}
        #t0byby1Title{position:absolute; top:-20px; left:0; color:#ccc;}
        #t0byby1Current{position:absolute; top:-20px; right:0px; color:#ccc;}
        #t0byby1Slideshow{position:absolute; top:-20px; right:90px; color:#fff;}
        #t0byby1Previous{position:absolute; top:50%; left:5px; margin-top:-32px; background:url(images/controls.png) no-repeat top left; width:28px; height:65px; text-indent:-9999px;}
        #t0byby1Previous:hover{background-position:bottom left;}
        #t0byby1Next{position:absolute; top:50%; right:5px; margin-top:-32px; background:url(images/controls.png) no-repeat top right; width:28px; height:65px; text-indent:-9999px;}
        #t0byby1Next:hover{background-position:bottom right;}
        #t0byby1LoadingOverlay{background:#000;}
        #t0byby1LoadingGraphic{background:url(images/loading.gif) no-repeat center center;}
        #t0byby1Close{position:absolute; top:5px; right:5px; display:block; background:url(images/controls.png) no-repeat top center; width:38px; height:19px; text-indent:-9999px;}
        #t0byby1Close:hover{background-position:bottom center;}