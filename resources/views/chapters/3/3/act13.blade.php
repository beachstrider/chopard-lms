@extends('layouts.app', ['view_type' => 'chapter-activity'])



@section('content')
<div id="slide-container">
    <div class="banner-content-wrapper hhtemp" style="display: none; z-index: 2002;">
        <div class="container">
            <div class="container">
                <h2 class="banner-chapter-number">3.3 GARDENS OF KINGS</h2>
                <h1 class="banner-title">@lang("CHOPARD PARFUMS<br>MASTER OF OUD")</h1>
                <p class="banner-txt">@lang("For the very first time in the history, a Luxury Maison,<br>had the immense privilege to enter in the sacred land of<br>Sylhet, Bangladesh. A world premiere during which Chopard<br>Parfums visited Jalali's Agarwood family plantations,<br>witnessed their unique tradition of distillation and their<br>immense respect for this treasure of their soil.")</p>
                <p class="banner-txt">@lang("Journey to the heart of Oud.")</p>
				<a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="play_vimeo('1'); $('.banner-content-wrapper.hhtemp').hide();" style="opacity: 0;">@lang("ENTER")</a>
			</div>
        </div>
    </div>

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_01.jpg') }});background-position:50% 50%; height: 100%; position: relative;"></div>

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_02.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;"></div>

	<div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_03.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper fix"></div>
	</div>

    <div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative;  display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <div>
                    <p class="bbb" style="
                        font-family: AGaramondPro;
                        font-style: italic;
                        line-height: 36px;
                        text-align: center;
                    ">
                    @lang("\"The time of oud is not the time of men. It's the time<br>of Nature connecting generations through the legacy of an<br>invaluable treasure, it's a time that naturally inspires<br>immense gratitude and sacred respect\"")
                    </p>
                    <p class="banner-txt" style="
                        font-size: 18px;
                        text-align: center;
                    ">
                    @lang("JALALI AGARWOOD")
                    </p>
                </div>
            </div>
        </div>
        <a href="#" role="button" class="btn btn-blanco aaa" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("CONTINUE THE JOURNEY")</a>
    </div>

	<div id="reel" class="vegas mich" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number" style="font-size: 18px;">3.3 GARDENS OF KINGS</h2>
				<br />
				<p class="banner-txt">
                @lang("Capturing all the emotional intensity and authenticity of a<br>people deeply attached to the treasure that nature has<br>bestowed upon them, Michael Christopher Brown has created<br>for Chopard a series of images that reveal, at a glance, the<br>powerful link uniting Man to Nature through respect.<br><br>These images show how Oud Assafi™ is a story of time and<br>patience. Those who harvest feel a deep sense of respect and<br>gratitude towards theirs elders, and those who are now<br>planting the trees of the future are driven by the responsibility<br>of transmission, which will allow the next generation to<br>harvest tomorrow what they have planted today.<br><br>The cycle of life, in its essence...")
				</p>
                
                <div class="michael_photo_container">
					<img src="{{ asset('assets/chapters/3.3/13/img/PortraitOfMichaelChristopherBrown.jpg') }}" alt="MICHAEL CHRISTOPHER BROWN">
                    <div>
                        <p style="font-size: 18px;">MICHAEL CHRISTOPHER BROWN</p>
                        <br><br><br>
                        <P>An American photo-journalist, Michael<br>Christopher Brown spans the globe in<br>search of images evoking and<br>illustrating the world's diverse cultures<br>and natural habitats.<br><br>He has worked on many National<br>Geographic assignments and is<br>recognized as one of the top 15 major<br>photographers of new generation.</P>
                    </div>
				</div>
			</div>
		</div>
        <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="auto_slide_first_start(21);">@lang("CONTINUE THE JOURNEY")</a>
    </div>

    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/01.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="0"><a href="#" role="button" class="btn btn-blanco" style="
            position: absolute;
            right: 100px;
            top: 100px;
        " onclick="skip_auto_slide();" data-index="0">@lang("SKIP")</a>
    </div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/02.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="1"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/03.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="2"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="3"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/05.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="4"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/06.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="5"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/07.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="6"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/08.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="7"><a href="#" role="button" class="btn btn-blanco" style="
            position: absolute;
            right: 100px;
            top: 100px;
        " onclick="skip_auto_slide();">@lang("SKIP")</a>
    </div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/09.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="8"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/10.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="9"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/11.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="10"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/12.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="11"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/13.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="12"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/14.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="13"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/15.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="14"><a href="#" role="button" class="btn btn-blanco" style="
            position: absolute;
            right: 100px;
            top: 100px;
        " onclick="skip_auto_slide();">@lang("SKIP")</a>
    </div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/16.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="15"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/17.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="16"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/18.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="17"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/19.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="18"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/20.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="19"></div>
    <div id="reel" class="vegas autoslide2" style="background-image:url({{ asset('assets/chapters/3.3/13/img/pdfs/21.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none; background-size: contain;" data-index="20"></div>
    
	<div id="reel" class="vegas bbcc" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_05.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
				<h2 class="banner-chapter-number">CHAPTER 3.3</h2>
                <h1 class="banner-title">@lang('GARDENS OF KINGS')</h1>
                <h1 class="banner-subtitle">@lang("A TRIBUTE TO THE \"KING OF WOODS,<BR>WOOD OF KINGS\"")</h1>
				<p class="banner-txt">@lang("This collection of signature fragrances showcases the<br>exceptional: the richest blend of ethical natural ingredients<br>including the most unique variety of pure oud, Oud Assafi™,<br>more precious than gold, sustainably sourced from the<br>Sylhet region in Bangladesh.")</p>
				<p class="banner-txt">@lang("The Princes of the Arab world. The Mughals and Maharajas<br>of India. The Great Emperors of the Far East. The lush Latin<br>America of the Legendary Explorers. Each perfume in this<br>Haute Parfumerie Collection pays tribute to oud by<br>exploring its most mythical territories and by tapping into<br>the Master Perfumer's unbound curiosity and creativity.")</p>
				<a href="#" role="button" class="btn btn-blanco " data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("CONTINUE THE JOURNEY")</a>
			</div>
		</div>
    </div>
    
    

    <div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_07.jpg') }});background-position:50% 50%;  height: 100%; position: relative; display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <h2 class="banner-chapter-number">3.3 GARDENS OF KINGS</h2>
                <h1 class="banner-title">@lang("FRAGRANCES")</h1>
                <p class="banner-txt">@lang("Oud, Agarwood, Wood of the Gods, Aloe Wood, Calambac,<br>Eaglewood, Jinkoh, or Gaharu are some of the names<br>given throughout history to this mythical wood. The<br>names inspired the Award Winning Master Perfumer<br>Alberto Morillas and it is also those given to the four<br>fragrances of the Gardens of Kings collection.")</p>
                <p class="banner-txt">@lang("ALBERTO MORILLAS<br>Master Perfumer")</p>
                <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="play_vimeo('2');">@lang("ENTER")</a>
            </div>
        </div>
    </div>

    <div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_08.jpg') }});background-position:50% 50%;  height: 100%; position: relative; display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <h2 class="banner-chapter-number">CHAPTER 3.3</h2>
                <h1 class="banner-title">@lang("AGAR ROYAL")</h1>
                <h1 class="banner-subtitle">@lang("THE RADIANT SPLENDOR<br>OF INDIA'S MAHARAJAS")</h1>
                <p class="banner-txt">@lang("Agar Royal is a tribute to the Great Kings of the Indies, the<br>palaces of the Maharajas, and the splendor and<br>shimmering colors of the subcontinent, which makes oud<br>vibrate with all the light and richness of its land of origin.")</p>
                <p class="banner-txt">@lang("A fragrance whose name evokes its roots: in Sanskrit<br>\"agaru\" means \"wood that does not float\" because of its<br>high content of resin.")</p>
                <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("START THE JOURNEY")</a>
            </div>
        </div>
    </div>

    <div id="reel" class="vegas cdcd" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
                <div>
                    <p class="first">
                    @lang("\"Agar Royal majestically intermingles a noble and<br>charismatic <strong>Oud Assafi™</strong> with other great symbols of Indian<br>perfumery, <strong>Indian Sambac Jasmine, Tuberose, Cypriol<br>Nargamotha</strong> that have the power to transport me into its<br>intoxicating sensuality and mystery\"")
                    </p>
                    <p class="banner-txt" style="
                        font-size: 18px;
                        text-align: center;
                    ">
                    @lang("<strong>ALBERTO MORILLAS</strong><br>MASTER PERFUMER")
                    </p>
                </div>
            </div>
            
		</div>
        <a href="#" role="button" class="btn btn-blanco ccc" data-modal="#modal-pdf" style="
                position: absolute;
                right: 100px;
                bottom: 160px;
            " onclick="endSlide_toActivity(0);">@lang("CONTINUE THE JOURNEY")</a>
    </div>  

    <div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/CHP2019-RM-Chapter3.3-GARDENKINGS-Aigle-Imperial-FOTO.jpg') }});background-position:50% 50%;  height: 100%; position: relative; display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <h2 class="banner-chapter-number">CHAPTER 3.3</h2>
                <h1 class="banner-title">@lang("AIGLE IMPERIAL")</h1>
                <h1 class="banner-subtitle">@lang("THE SOPHISTICATION AND<br>MYSTERY OF THE FAR EAST")</h1>
                <p class="banner-txt">@lang("Aigle Imperial pays tribute to the majestic jade-green<br>forests and imperial gardens of the Far-East, treasuring<br>sacred temples and magnificent palaces bathed in the<br>vital energy of nature.")</p>
                <p class="banner-txt">@lang("Aigle Imperial is inspired by the historical name Eaglewood.")</p>
                <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("START THE JOURNEY")</a>
            </div>
        </div>
    </div>

    <div id="reel" class="vegas cdcd" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
                <div>
                    <p class="first">
                    @lang("\"Aigle Imperial exalts the contrast between the pure and intense freshness<br>of the forest with the woody resinous heart of <strong>Oud Assafi</strong>™, and the<br>mysterious wisps of <strong>Smoked Incense.</strong> A natural, aromatic and oxygenated<br>green Oud that I have engorged with the limpidity of the <strong>Green Tea</strong> notes<br>and <strong>Ginger</strong>, and the intensity of <strong>Patchouli leaves</strong>\"")
                    </p>
                    <p class="banner-txt" style="
                        font-size: 18px;
                        text-align: center;
                    ">
                    @lang("<strong>ALBERTO MORILLAS</strong><br>MASTER PERFUMER")
                    </p>
                </div>
            </div>
            
		</div>
        <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="endSlide_toActivity(2);">@lang("CONTINUE THE JOURNEY")</a>
    </div>

    <div id="reel" class="vegas ededab" style="background-image:url({{ asset('assets/chapters/3.3/13/img/CHP2019-RM-Chapter3.3-GARDENKINGS-Nuit-des-Rois-FOTO.jpg') }});background-position:50% 50%;  height: 100%; position: relative; display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <h2 class="banner-chapter-number">CHAPTER 3.3</h2>
                <h1 class="banner-title">@lang("NUIT DES ROIS")</h1>
                <h1 class="banner-subtitle">@lang("THE MAGNIFICENCE OF<br>THE PRINCES OF ARABIA")</h1>
                <p class="banner-txt">@lang("Nuit des Rois is a grandiose tribute to the Arabian princes,<br>masters of sumptuous ceremonies, and to the bewitching<br>spell of starlit desert night.")</p>
                <p class="banner-txt">@lang("The Award Winning Master Perfumer, Alberto Morillas, conceived the<br>\"King of woods, wood of Kings\" as a powerful nocturnal<br>oud: rich, opulent and glamorous, blended with two other<br>grand naturals of perfumery - Bulgarian Rose and Orris.<br>Nuit des Rois reveals an exceptional radiance and sillage<br>with an extravagant addiction.")</p>
                <p class="banner-txt">@lang("Nuit des Rois is reminiscent of one of the historical names<br>of Oud, King of woods.")</p>
                <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("START THE JOURNEY")</a>
            </div>
        </div>
    </div>

    <div id="reel" class="vegas ddd cdcd" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
                <div>
                    <p class="first">
                    @lang("\"Nuit des Rois is an opulent elixir incarnated by the wealth of the<br>three greatest and most precious natural raw materials in perfumery -<br><strong>Oud Assafi, Bulgarian Rose</strong> and <strong>Orris</strong> - spreading out their<br>luxurious aura like a red carpet, together with <strong>Benzoin, Patchouli,<br>Oliban, Saffron, Honey</strong> and <strong>Vanilla</strong>, and the sensuality of a dark and<br>supple leather note. This is a fragrance that reminds me of the heady<br>air of the sumptuous nights of the Orient\"")
                    </p>
                    <p class="banner-txt" style="
                        font-size: 18px;
                        text-align: center;
                    ">
                    @lang("<strong>ALBERTO MORILLAS</strong><br>MASTER PERFUMER")
                    </p>
                </div>
            </div>
            
		</div>
        <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" style="
                position: absolute;
                right: 100px;
                bottom: 160px;
            " onclick="endSlide_toActivity(4);">@lang("CONTINUE THE JOURNEY")</a>
    </div>

    <div id="reel" class="vegas" style="background-image:url({{ asset('assets/chapters/3.3/13/img/CHP2019-RM-Chapter3.3-GARDENKINGS-Or-Calam-Calam-FOTO.jpg') }});background-position:50% 50%;  height: 100%; position: relative; display: none;">
        <div class="banner-content-wrapper">
            <div class="container">
                <h2 class="banner-chapter-number">CHAPTER 3.3</h2>
                <h1 class="banner-title">@lang("OR DE CALAMBAC")</h1>
                <h1 class="banner-subtitle">@lang("THE RICHNESS OF AN EPICUREAN OUD<br>SOAKED WITH THE COLORS OF LATIN AMERICA")</h1>
                <p class="banner-txt">@lang("In Or de Calambac, oud becomes irresistible. Freed from<br>its historical heritage, pure Oud Assafi™, is brought into<br>new territories, never before explored. Colourful, playful,<br>and captivating, Or de Calambac is inspired by the pure<br>radiance of Latin America.")</p>
                <p class="banner-txt">@lang("Or de Calambac is reminiscent of one of the historical<br>names, Calambac.")</p>
                
                <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" onclick="tree_tree_slider();">@lang("START THE JOURNEY")</a>
            </div>
        </div>
    </div>

    <div id="reel" class="vegas cdcd" style="background-image:url({{ asset('assets/chapters/3.3/13/img/back_04.jpg') }});background-position:50% 50%; height: 100%; position: relative; display: none;">
		<div class="banner-content-wrapper">
			<div class="container">
                <div>
                    <p class="first">
                    @lang("\"Or de Calambac is a gourmet and epicurean Oud savoured<br>through all the nuances of hot and fresh spices like <strong>Cinnamon,<br>Cardamom,</strong> and <strong>Pepper,</strong> the addictive gourmet notes of<br><strong>Cocoa, Tonka Bean</strong> and <strong>Vanilla</strong> and the warm, woody notes<br>of <strong>Vetiver</strong> and <strong>Gaiac Wood</strong>\"")
                    </p>
                    <p class="banner-txt" style="
                        font-size: 18px;
                        text-align: center;
                    ">
                    @lang("<strong>ALBERTO MORILLAS</strong><br>MASTER PERFUMER")
                    </p>
                </div>
            </div>
            
		</div>
        <a href="#" role="button" class="btn btn-blanco" data-modal="#modal-pdf" style="
                position: absolute;
                right: 100px;
                bottom: 160px;
            " onclick="endSlide_toActivity(6);">@lang("CONTINUE THE JOURNEY")</a>
    </div>
</div>

<div class="splash no-scroll vnum1">
    <div class="container">
        <div class="splash-close" onclick="justclose_splash(1)" style="
            position: absolute;
            right: 100px;
            top: 100px;
        "><span aria-hidden="true">×</span> @lang('Close')</div>
        <div class="splash-video">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="video1" class="embed-responsive-item" controls>
                    <source src="{{ url('videochop/OUD_VIDEO_Chopard.mp4') }}" type="video/mp4">
                </video>  
            </div>
        </div>
    </div>
</div>

<div class="splash no-scroll vnum2">
    <div class="container">
        <div class="splash-close" onclick="justclose_splash(2)" style="
            position: absolute;
            right: 100px;
            top: 100px;
        "><span aria-hidden="true">×</span> @lang('Close')</div>
        <div class="splash-video">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="video2" class="embed-responsive-item" controls>
                    <source src="{{ url('videochop/Alberto_Morillas.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>

<div id="act13" class="banner-chapter" data-partnum="0">
    <div class="action-intro">
        <div class="container">
            <br><br>
    
            <div class="action-txt">
                <p>Find the correct pictures for the Agar Royal main natural & sustainable ingredients:<br>Oud Assafi™. Indian Sambac Jasmin. Heart of Cypriol Nargamotha</p>
                @lang("(use the trash icon to delete and the palm icon to confirm the correct images)")<br><br><br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b1">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/01.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">OUD ASSAFI™</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/02.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">PINK PEPPER</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/03.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">INDIAN SAMBAC JASMIN</div>
                            </div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/04.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">PEPPERMINT</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/05.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">HEART OF CYPRIOL NARGAMOTHA</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/06.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">APPLE</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="act13" class="banner-chapter second" data-partnum="1">
    <div class="action-intro">
        <div class="container">
            <br>
            <h3 class="action-title-chapter"></h3>
    
            <div class="action-txt">
                <p>Find the correct adjectives for the Agar Royal main natural & sustainable ingredients:<br>Oud Assafi™. Indian Sambac Jasmin. Heart of Cypriol Nargamotha</p>
                @lang("(drag and drop the adjectives with their ingredients)")<br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b2">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="1">EMBLEMATIC, CHARISMATIC</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="2">WOODY WARM</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="3">NARCOTIC, INTOXICATING</div>
                        <div class="sample-item empty"></div>
                    </div>
                    
                    
                    <div class="col-xs-4">
                        <div class="item-img" data-solution="1">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/01.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/02.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="3">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/03.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/04.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="2">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/05.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/06.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter" data-partnum="2">
    <div class="action-intro">
        <div class="container">
            <br><br>
    
            <div class="action-txt">
                <p>Find the correct pictures for the Aigle Imperial main natural & sustainable ingredients:<br>Oud Assafi™ . Ginger . Patchouli</p>
                @lang("(use the trash icon to delete and the palm icon to confirm the correct images)")<br><br><br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b1">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/07.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">GINGER</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/08.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">HONEY</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/09.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">PATCHOULI</div>
                            </div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/10.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">CALABRIAN BERGAMOT</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/11.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">OUD ASSAFI™</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/12.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">ORANGE BLOSSOM</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter second" data-partnum="3">
    <div class="action-intro">
        <div class="container">
            <br>
            <h3 class="action-title-chapter"></h3>
    
            <div class="action-txt">
                <p>Find the correct adjectives for the Aigle Imperial main natural & sustainable ingredients:<br>Oud Assafi™. Ginger. Patchouli</p>
                @lang("(drag and drop the adjectives with their ingredients)")<br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b2">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="1">INTENSE, MYSTERIOUS</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="2">VIVIFYING, ENERGY</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="3">EMBLEMATIC, CHARISMATIC</div>
                        <div class="sample-item empty"></div>
                    </div>
                    
                    
                    <div class="col-xs-4">
                        <div class="item-img" data-solution="2">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/07.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/08.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="1">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/09.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/10.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="3">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/11.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/12.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter" data-partnum="4">
    <div class="action-intro">
        <div class="container">
            <br><br>
    
            <div class="action-txt">
                <p>Find the correct pictures for the Nuit des Rois main natural & sustainable ingredients:<br>Oud Assafi™ . Bulgarian Rose . Orris</p>
                @lang("(use the trash icon to delete and the palm icon to confirm the correct images)")<br><br><br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b1">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/13.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">OUD ASSAFI™</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/14.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">JASMIN</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/15.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">TONKA BEAN</div>
                            </div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/16.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">ORRIS</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/17.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">PINK PEPPER</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/18.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">BULGARIAN ROSE </div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter second" data-partnum="5">
    <div class="action-intro">
        <div class="container">
            <br>
            <h3 class="action-title-chapter"></h3>
    
            <div class="action-txt">
                <p>Find the correct adjectives for the Nuit des Rois main natural & sustainable ingredients:<br>Oud Assafi™. Bulgarian Rose . Orris</p>
                @lang("(drag and drop the adjectives with their ingredients)")<br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b2">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="1">PRECIOUS, INTENSE</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="2">EMBLEMATIC, CHARISMATIC</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="3">LUXURIOUS, NARCOTIC</div>
                        <div class="sample-item empty"></div>
                    </div>
                    
                    
                    <div class="col-xs-4">
                        <div class="item-img" data-solution="2">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/13.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/14.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/15.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="3">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/16.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/17.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="1">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/18.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter" data-partnum="6">
    <div class="action-intro">
        <div class="container">
            <br><br>
    
            <div class="action-txt">
                <p>Find the correct pictures for the Or de Calambac main natural & sustainable ingredients:<br>Oud Assafi™ . Green Cardamom from Guatemala . Vanilla from Madagascar</p>
                @lang("(use the trash icon to delete and the palm icon to confirm the correct images)")<br><br><br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b1">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/19.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">GREEN CARDAMOM FROM GUATEMALA</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/20.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">BULGARIAN ROSE</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/Vanilla.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">VANILLA FROM MADAGASCAR</div>
                            </div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/22.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">ORANGE BLOSSOM</div>
                            </div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img correct" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/23.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">OUD ASSAFI™</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img wrong" data-retry="0">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/24.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container">
                                <ul class="item-bottom-btn-list">
                                    <li>
                                        <div class="bbtn-action-palm"></div>
                                    </li>
                                    <li>
                                        <div class="bbtn-action-delete"></div>
                                    </li>
                                </ul>
                                <div class="item-bottom-solution" style="display: none;">ORRIS</div>
                            </div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div id="act13" class="banner-chapter second" data-partnum="7">
    <div class="action-intro">
        <div class="container">
            <br>
            <h3 class="action-title-chapter"></h3>
    
            <div class="action-txt">
                <p>Find the correct adjectives for the Or De Calambac main natural & sustainable ingredients:<br>Oud Assafi™ . Green Cardamom from Guatemala . Vanilla from Madagascar</p>
                @lang("(drag and drop the adjectives with their ingredients)")<br>
    
            </div>
    
        </div>
    
    </div>
    
    <div class="action-body b2">
        <div class="container">
            <div class="action-activity">
                <div class="row gutters-10 imgs">
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="1">EMBLEMATIC, CHARISMATIC</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="2">ADDICTIVE, GOURMET</div>
                        <div class="sample-item empty"></div>
                    </div>
                    <div class="col-xs-4 sample-container">
                        <div class="sample-item drag" data-retry="0" draggable="true" data-number="3">SPICY, VIBRANT</div>
                        <div class="sample-item empty"></div>
                    </div>
                    
                    
                    <div class="col-xs-4">
                        <div class="item-img" data-solution="3">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/19.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/20.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="2">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/Vanilla.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>					
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/22.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>
                            
                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img" data-solution="1">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/23.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>
                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="item-img">
                            <div class="item-img-mask">
                                <img src="{{ asset('assets/chapters/3.3/13/img/24.jpg') }}" alt="Chopard" class="img-responsive">
                            </div>

                            <div class="item-bottom-btn-container"></div>

                            <div class="item-img-tryagain">
                                <button type="button" class="btn btn-blanco">TRY AGAIN</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.confirmdialog')

</div>
  
</div>





@endsection



@push('scripts')

dlw.base();

dlw.activity({{ $current_activity->id }}, '{{ $next_route }}', false);

@endpush