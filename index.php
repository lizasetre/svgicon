<html>
	<head>
		<style>
      #talk_icon {
	max-width: 10rem;
	margin: auto;
	display: block;
	overflow: visible;
	
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	
	#front-bubble #white_part {
		stroke-width: 1;
		stroke: white;
	}
}

svg, path, g { transition: all 300ms ease-in-out; }

#talk_icon:hover #back-bubble {
	transform: translate(-1px, -4px) scale(0.9);
}
#talk_icon:hover #front-bubble {
  transform: scale(1.125);
}
#talk_icon:hover #speech-dots path {
  animation: twinkle 2000ms ease-in-out alternate infinite;
  transform-origin: center;
}

//same animation is used but just put a delay on it
#talk_icon:hover #speech-dots
path:nth-child(1) {
	animation-delay: 50ms;
}
path:nth-child(2) {
	animation-delay: 150ms;
}
#talk_icon:hover #speech-dots path:nth-child(3) {
	animation-delay: 250ms;
}
#talk_icon:hover #speech-dots path:nth-child(4) {
	animation-delay: 350ms;
}


@keyframes twinkle {
  0% {
    opacity: 1;
		transform: scale(1);
  }
  25% {
    opacity: 0;
    transform: scale(0.95);
  }
  50% {
    opacity: 1;
    transform: scale(1);
  }
  75% {
    opacity: 0;
    transform: scale(0.95);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
      </style>
	</head>
   <body>
		<table>
		<th>
      <svg id="talk_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 35 29.8" enable-background="new 0 0 35 29.8" xml:space="preserve">
	<g id="back-bubble">
		<path d="M1.2 22.4c-0.4 0.3-0.6 0.7-0.5 1.2 0.1 0.4 0.5 0.8 0.9 0.8 0.5 0.1 0.9 0.1 1.4 0.1 1.5 0 2.8-0.3 4-0.9 2.2 1.2 4.8 1.8 7.4 1.8 3.8 0 7.4-1.3 10.1-3.7 2.7-2.4 4.3-5.6 4.3-9 0-3.4-1.5-6.6-4.3-9C21.8 1.3 18.2 0 14.4 0 10.6 0 7 1.3 4.3 3.7 1.5 6.1 0 9.3 0 12.7c0 2.8 1 5.5 2.9 7.7C2.5 21.2 1.9 21.9 1.2 22.4L1.2 22.4zM2.7 23.1c0.8-0.7 1.3-1.5 1.7-2.6 0.1-0.3 0-0.5-0.1-0.7 -1.9-2-2.8-4.5-2.8-7 0-6.2 5.8-11.2 12.9-11.2 7.1 0 12.9 5 12.9 11.3 0 6.2-5.8 11.3-12.9 11.3 -2.5 0-5-0.6-7.1-1.8 -0.2-0.1-0.5-0.1-0.7 0 -1 0.6-2.2 0.9-3.6 0.9H2.7zM3 23.1"/>
	</g>
	<g id="front-bubble">
		<path id="white_part" fill="white" d="M30.7 24.1c1.9-2 2.8-4.5 2.8-7 0-6.2-5.8-11.2-12.9-11.2 -7.1 0-12.9 5-12.9 11.3 0 6.2 5.8 11.3 12.9 11.3 2.5 0 5-0.6 7.1-1.8 0.2-0.1 0.5-0.1 0.7 0 1 0.6 2.2 0.9 3.6 0.9h0.3c-0.8-0.7-1.3-1.5-1.7-2.6C30.5 24.6 30.5 24.3 30.7 24.1z"/>
		<path d="M33.8 26.8c-0.7-0.5-1.3-1.2-1.7-2 1.9-2.2 2.9-4.9 2.9-7.7 0-3.4-1.5-6.6-4.3-9C28 5.7 24.4 4.4 20.6 4.4c-3.8 0-7.4 1.3-10.1 3.7 -2.7 2.4-4.3 5.6-4.3 9 0 3.4 1.5 6.6 4.3 9 2.7 2.4 6.3 3.7 10.1 3.7 2.6 0 5.2-0.6 7.4-1.8 1.2 0.6 2.5 0.9 4 0.9 0.5 0 0.9 0 1.4-0.1 0.5-0.1 0.8-0.4 0.9-0.8C34.4 27.5 34.2 27 33.8 26.8zM32 27.4c-1.3 0-2.5-0.3-3.6-0.9 -0.2-0.1-0.5-0.1-0.7 0 -2.1 1.2-4.5 1.8-7.1 1.8 -7.1 0-12.9-5-12.9-11.3 0-6.2 5.8-11.3 12.9-11.3 7.1 0 12.9 5 12.9 11.2 0 2.6-1 5-2.8 7 -0.2 0.2-0.2 0.5-0.1 0.7 0.4 1 1 1.9 1.7 2.6H32z"/>
		<g id="speech-dots">
			<path d="M18.3 18.9c0.3 0 0.7-0.1 0.9-0.4 0.2-0.2 0.4-0.6 0.4-0.9 0-0.3-0.1-0.7-0.4-0.9 -0.2-0.2-0.6-0.4-0.9-0.4 -0.3 0-0.7 0.1-0.9 0.4 -0.2 0.2-0.4 0.6-0.4 0.9 0 0.3 0.1 0.7 0.4 0.9C17.6 18.7 17.9 18.9 18.3 18.9L18.3 18.9zM18.3 18.9"/>
			<path d="M13.6 18.9c0.3 0 0.7-0.1 0.9-0.4 0.2-0.2 0.4-0.6 0.4-0.9 0-0.3-0.1-0.7-0.4-0.9 -0.2-0.2-0.6-0.4-0.9-0.4 -0.3 0-0.7 0.1-0.9 0.4 -0.2 0.2-0.4 0.6-0.4 0.9 0 0.3 0.1 0.7 0.4 0.9C13 18.7 13.3 18.9 13.6 18.9L13.6 18.9zM13.6 18.9"/>
			<path d="M24.2 17.6c0-0.7-0.6-1.3-1.3-1.3 -0.7 0-1.3 0.6-1.3 1.3 0 0.7 0.6 1.3 1.3 1.3C23.6 18.9 24.2 18.3 24.2 17.6L24.2 17.6zM24.2 17.6"/>
			<path d="M28.9 17.6c0-0.7-0.6-1.3-1.3-1.3 -0.7 0-1.3 0.6-1.3 1.3 0 0.7 0.6 1.3 1.3 1.3C28.3 18.9 28.9 18.3 28.9 17.6L28.9 17.6zM28.9 17.6"/>
		</g>
	</g>
</svg>
