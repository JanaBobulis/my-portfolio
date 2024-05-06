<style>.hex-ratio {
  aspect-ratio: 86/75;
}

@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-size: 20px;
  line-height: 26px;
  font-weight: 400;
  font-style: normal;
  color: #222222;
  font-family: "filson-pro", sans-serif;
}

html {
  margin-top: 0 !important;
}

img,
picture,
source {
  max-width: 100%;
  width: auto;
  height: auto;
  -o-object-fit: cover;
  object-fit: cover;
  -o-object-position: center;
  object-position: center;
}

#primary {
  padding-top: 161px;
}

#content-rows .content-row:last-child:has(.partners-marquee) {
  margin-bottom: 0;
}

.sr-only {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border: 0 !important;
}

.content-row {
  padding-bottom: 60px;
}

.site-bounds {
  max-width: 1512px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: 0 20px;
}

.content-bounds {
  max-width: 1350px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: 0 20px;
}

.small-bounds {
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: 0 20px;
}

.post-bounds {
  max-width: 1222px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: 0 20px;
}

.hero-bounds {
  max-width: 1512px;
  margin-left: auto;
  margin-right: auto;
  position: relative;
  padding: 0 85px;
}

.hero-papercut {
  position: absolute;
  width: 100%;
  bottom: 0;
  margin-bottom: -40px;
}

.yellow-button,
#gform_submit_button_1 {
  background: #feb62e;
  transition: 150ms linear all;
  padding: 16px 25px;
  border-radius: 10px;
  color: #2c237b;
  text-decoration: none;
  font-size: 20px;
  line-height: 22px;
  transition: 150ms linear all;
  font-weight: 500;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}
.yellow-button .blue-arrow svg,
#gform_submit_button_1 .blue-arrow svg {
  transition: 150ms linear all;
}
.yellow-button:hover,
#gform_submit_button_1:hover {
  color: #2c237b;
}
.yellow-button:hover .blue-arrow svg,
#gform_submit_button_1:hover .blue-arrow svg {
  transform: translateX(5px);
  transition: 150ms linear all;
}
.yellow-button span,
#gform_submit_button_1 span {
  line-height: 1;
}

.red-button {
  background: #c00c00;
  padding: 16px 25px;
  border-radius: 10px;
  color: white;
  text-decoration: none;
  font-size: 20px;
  line-height: 22px;
  font-weight: 500;
}

.blue-button {
  background: #2c237b;
  padding: 16px 25px;
  border-radius: 10px;
  color: white;
  text-decoration: none;
  font-size: 20px;
  line-height: 22px;
  font-weight: 500;
}
.blue-button span {
  line-height: 1;
}
.blue-button:hover {
  color: white;
}
.blue-button:hover .yellow-arrow svg {
  transform: translateX(5px);
  transition: 150ms linear all;
}

.yellow-arrow {
  vertical-align: top;
}

.yellow-bg {
  background-color: #feb62e;
}

.grey-bg {
  background-color: #f3f2ee;
}

h1 {
  color: #2c237b;
  font-size: 80px;
  line-height: 1.1;
  font-weight: 300;
}
h1 strong {
  color: #2c237b;
  font-size: 80px;
  font-weight: 400;
}

h2,
h3 {
  color: #2c237b;
  font-size: 54px;
  font-weight: 500;
}

h4 {
  color: #222222;
  font-size: 24px;
  font-weight: 500;
  line-height: 26px;
}

.large-paragraph-copy p {
  font-size: 24px;
  font-weight: 500;
  line-height: 26px;
}

em,
i,
strong,
b {
  color: inherit;
}

.owl-dot {
  cursor: default;
  position: relative;
  width: 18px;
  height: 10.3923048454px;
  background-color: #2c237b;
  margin: 5.1961524227px auto 0 auto;
  box-shadow: 0 0 50px rgb(255, 255, 255);
  border-left: solid 0px #2c237b;
  border-right: solid 0px #2c237b;
  display: grid;
  transition: 0s;
}

.hexagon:before,
.hexagon:after,
.owl-dot:before,
.owl-dot:after {
  content: "";
  position: absolute;
  z-index: 1;
  width: 12.7279220614px;
  height: 12.7279220614px;
  transform: scaleY(0.5774) rotate(-45deg);
  background-color: inherit;
  left: 2.6360389693px;
  transition: 0s;
}

.hexagon:before,
.owl-dot:before {
  top: -6.3639610307px;
  border-top: solid 0px #2c237b;
  border-right: solid 0px #2c237b;
}

.hexagon:after,
.owl-dot:after {
  bottom: -6.3639610307px;
  border-bottom: solid 0px #2c237b;
  border-left: solid 0px #2c237b;
}

.hex {
  -webkit-clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
  clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
}
.hex img {
  width: 100%;
  height: 100%;
}

.hex-ratio {
  aspect-ratio: 86/75;
}

.linear-gradient-1 {
  background: linear-gradient(180deg, #feb62e 0%, #8d2e18 100%);
}

.linear-gradient-2 {
  background: linear-gradient(180deg, #feb62e 0%, #c00c00 100%);
}

.linear-gradient-3 {
  background: linear-gradient(180deg, #feb62e 0%, #2c237b 100%);
}

#wpadminbar {
  display: none;
}

.wrapper.no-overflow {
  overflow-x: hidden;
}

body.home .wrapper {
  overflow: hidden;
}

.placeholder-section-one {
  height: 200px;
  background: white;
}

.placeholder-section-two {
  height: 200px;
  background: #f4f3db;
}

@media screen and (max-width: 1366px) {
  .hex-img-container:nth-child(even) {
    position: absolute;
  }
}
@media screen and (max-width: 1244px) {
  .hero-papercut {
    margin-bottom: -30px;
  }
}
@media screen and (max-width: 901px) {
  .hero-papercut {
    margin-bottom: -20px;
  }
  #primary {
    padding-top: 100px;
  }
}
@media screen and (max-width: 768px) {
  h1 {
    font-size: 80px;
    line-height: 90px;
  }
  h1 strong {
    font-size: 80px;
    line-height: 90px;
  }
}
@media screen and (max-width: 575px) {
  h2,
  h3 {
    font-size: 35px;
  }
  .hero-papercut {
    margin-bottom: -10px;
  }
  .hero-bounds {
    padding: 0 20px;
  }
  h1 {
    font-size: 60px;
    line-height: 70px;
  }
  h1 strong {
    font-size: 60px;
    line-height: 70px;
  }
  .yellow-button {
    font-size: 18px;
  }
  .yellow-button span svg {
    width: 10px;
  }
}
@media screen and (max-width: 475px) {
  .hero-papercut {
    margin-bottom: 0px;
  }
}
.page-not-found {
  min-height: 600px;
}
.page-not-found .page-not-found-inner {
  max-width: 590px;
  gap: 20px;
}
.page-not-found .page-not-found-inner h1 {
  font-size: 54px;
  line-height: 40px;
  font-weight: 500;
}
.page-not-found .page-not-found-inner .return-home-button span {
  color: #2c237b;
}

.thank-you-page h1,
.privacy-policy-page h1 {
  font-size: 54px;
  line-height: 60px;
  font-weight: 500;
}

.privacy-policy-page {
  padding-top: 150px;
}

.dropdown-item {
  white-space: initial;
  padding: 10px;
}

.heart-beelieve {
  position: absolute;
  right: -88px;
  max-width: 373px;
  height: 100%;
  top: -6px;
  transition: all 300ms ease-in-out;
  transform-origin: top right;
  scale: 1.3;
}
.heart-beelieve svg {
  height: 100%;
}

.header {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 161px;
  z-index: 50;
  background: white;
  transition: height 300ms ease-in-out;
}
.header.hero-scrolled {
  transition: height 300ms ease-in-out;
  height: 100px;
}
.header.hero-scrolled .logo {
  transition: width 300ms ease-in-out;
  width: 170px;
}
.header.hero-scrolled .menu-item:last-child {
  transition: margin-left 300ms ease-in-out;
  margin-left: 0;
}
.header.hero-scrolled .heart-beelieve {
  right: -25px;
  scale: 1.3;
  top: -1px;
  transition: all 300ms ease-in-out;
}
.header .header-inner {
  width: 100%;
  height: 100%;
}
.header .header-inner .burger-container {
  display: none;
}
.header nav {
  z-index: 10;
}
.header .menu-item span {
  transition: background-size 0.5s ease;
  width: calc(100% + 1px);
  padding-bottom: 2px;
  background-image: linear-gradient(transparent calc(100% - 2px), #feb62e 2px);
  background-repeat: no-repeat;
  background-size: 0% 100%;
}
.header .menu-item.current_page_item a span {
  background-size: 100% 100%;
}
.header .menu-item .nav-link:hover span {
  background-size: 100% 100%;
}
.header .menu-item.menu-item-has-children {
  padding-right: 20px;
}
.header .menu-item.menu-item-has-children .dropdown-toggle:after {
  content: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDEyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0yIDIuMDYxOTVMNi4yOTY1MyA1Ljg3NDk0TDEwLjM1ODUgMS44MTI5NyIgc3Ryb2tlPSIjMjIyMjIyIiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8L3N2Zz4K");
  bottom: 0;
  border: none;
  position: absolute;
  top: 19%;
  right: 17%;
}
.header .menu-item.menu-item-has-children .dropdown-menu {
  border-radius: unset;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
}
.header .menu-item.menu-item-has-children .dropdown-menu li:last-child {
  margin-left: 0 !important;
}
.header .menu-item.menu-item-has-children:hover .dropdown-menu {
  display: block;
  margin-left: 1rem;
}
.header .menu-item.menu-item-has-children:hover .dropdown-menu .dropdown-item span {
  font-size: 18px;
  position: relative;
  transition: background-size 0.5s ease;
  width: calc(100% + 1px);
  padding-bottom: 2px;
  background-image: linear-gradient(transparent calc(100% - 2px), #feb62e 2px);
  background-repeat: no-repeat;
  background-size: 0% 100%;
}
.header .menu-item.menu-item-has-children:hover .dropdown-menu .dropdown-item:hover {
  background-color: white;
}
.header .menu-item.menu-item-has-children:hover .dropdown-menu .dropdown-item:hover span {
  background-size: 100% 100%;
}
.header .menu-item:nth-last-child(2) a.nav-link span {
  font-weight: 700;
  color: #2c237b;
}
.header .menu-item:last-child {
  margin-left: 20px;
}
.header .menu-item:last-child a.nav-link span {
  font-weight: 700;
  color: #2c237b;
}
.header:last-child {
  margin-left: 20px;
  transition: margin-left 300ms ease-in-out;
}
.header:last-child a.nav-link span {
  font-weight: 700;
  color: #2c237b;
}

.logo {
  max-width: 310px;
  width: 310px;
  height: 100%;
  display: block;
  transition: width 300ms ease-in-out;
}
.logo svg {
  width: 100%;
}

.mobile-menu-container {
  opacity: 0;
  pointer-events: none;
  background-color: white;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 20;
  width: 100%;
  height: 100vh;
}
.mobile-menu-container .main-menu {
  display: flex;
  flex-direction: column !important;
  gap: 36px;
}
.mobile-menu-container .main-menu li {
  color: #2c237b;
}
.mobile-menu-container .main-menu li.current_page_item a span {
  background-size: 100% 100%;
}
.mobile-menu-container .main-menu li span {
  font-size: 28px;
  position: relative;
  transition: background-size 0.5s ease;
  width: calc(100% + 1px);
  padding-bottom: 2px;
  background-image: linear-gradient(transparent calc(100% - 2px), #feb62e 2px);
  background-repeat: no-repeat;
  background-size: 0% 100%;
}
.mobile-menu-container .main-menu li:hover span {
  background-size: 100% 100%;
}
.mobile-menu-container.active-nav {
  pointer-events: auto !important;
  opacity: 1 !important;
  transition: 150ms linear opacity;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-toggle:after {
  content: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDEyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CjxwYXRoIGQ9Ik0yIDIuMDYxOTVMNi4yOTY1MyA1Ljg3NDk0TDEwLjM1ODUgMS44MTI5NyIgc3Ryb2tlPSIjMjIyMjIyIiBzdHJva2Utd2lkdGg9IjMiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPgo8L3N2Zz4K");
  bottom: 0;
  border: none;
  position: absolute;
  top: 4%;
  right: 32%;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu {
  text-align: center;
  border: unset;
  max-height: 0;
  overflow: hidden;
  transition: all 0.3s ease;
  display: block;
  position: relative;
  padding: 0;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu.dropdown-menu-active {
  max-height: 210px;
  transition: all 0.3s ease;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu.dropdown-menu-active li {
  height: 100%;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu li.menu-item:hover a {
  background-color: transparent;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu li.menu-item:hover span {
  background-size: 100% 100%;
}
.mobile-menu-container .menu-item.menu-item-has-children .dropdown-menu li.menu-item a span {
  transition: background-size 0.5s ease;
  width: calc(100% + 1px);
  padding-bottom: 2px;
  background-image: linear-gradient(transparent calc(100% - 2px), #feb62e 2px);
  background-repeat: no-repeat;
  background-size: 0% 100%;
}

body.active-nav {
  overflow: hidden;
}
body.active-nav .heart-beelieve {
  display: none;
}

@media screen and (max-width: 1400px) {
  header .heart-beelieve {
    right: -7%;
  }
}
@media screen and (max-width: 1100px) {
  .header-inner .heart-beelieve {
    right: -9%;
  }
  .header .logo {
    max-width: 270px;
    width: 270px;
  }
}
@media screen and (max-width: 1000px) {
  header.header .logo {
    max-width: 200px;
    width: 200px;
  }
  header.header .menu-item a.nav-link span {
    font-size: 14px;
  }
  header.header .dropdown-menu .dropdown-item span {
    font-size: 14px;
  }
  header.header .heart-beelieve {
    right: -10%;
  }
}
@media screen and (max-width: 901px) {
  a.nav-link {
    padding: 0.5rem 0.7rem;
  }
  .logo {
    max-width: 270px;
    width: 270px;
  }
}
@media screen and (max-width: 850px) {
  a.nav-link {
    padding: 0.5rem 0.5rem;
  }
  header.header .logo {
    max-width: 170px;
    width: 170px;
  }
  header.header header.header .logo {
    max-width: 170px;
    width: 170px;
  }
}
@media screen and (max-width: 800px) {
  header.header .heart-beelieve {
    right: -24%;
  }
}
@media screen and (max-width: 768px) {
  header.header .header-inner .burger-container {
    display: flex;
  }
  header.header .header-inner .burger-container ul {
    width: 20px;
    height: 18px;
    cursor: pointer;
    position: relative;
    margin-top: 16px;
  }
  header.header .header-inner .burger-container ul li {
    list-style: none;
    position: absolute;
    background-color: #feb62e;
    width: 100%;
    height: 4px;
    transform: translateY(-50%);
    transition: 150ms;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(1) {
    top: 0%;
    border-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(2) {
    top: 50%;
    border-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(3) {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(3),
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    width: 50%;
    top: 100%;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(1),
  header.header .header-inner .burger-container ul li:nth-of-type(2),
  header.header .header-inner .burger-container ul li:nth-of-type(3) {
    left: 0;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    right: 0;
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(1) {
    top: 50%;
    transform: translateY(-50%) rotate(45deg);
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(2) {
    top: 50%;
    transform: translateY(-50%) rotate(-45deg);
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(3) {
    left: -50%;
    opacity: 0;
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(4) {
    right: -50%;
    opacity: 0;
  }
  header.header .header-inner nav {
    display: none;
  }
}
@media screen and (max-width: 901px) {
  header.header {
    height: 100px;
  }
  header.header.hero-scrolled {
    height: 80px;
  }
  header.header .header-inner .burger-container {
    display: flex;
  }
  header.header .header-inner .burger-container ul {
    width: 20px;
    height: 18px;
    cursor: pointer;
    position: relative;
    margin-top: 16px;
  }
  header.header .header-inner .burger-container ul li {
    list-style: none;
    position: absolute;
    background-color: #feb62e;
    width: 100%;
    height: 4px;
    transform: translateY(-50%);
    transition: 150ms;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(1) {
    top: 0%;
    border-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(2) {
    top: 50%;
    border-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(3) {
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(3),
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    width: 50%;
    top: 100%;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(1),
  header.header .header-inner .burger-container ul li:nth-of-type(2),
  header.header .header-inner .burger-container ul li:nth-of-type(3) {
    left: 0;
  }
  header.header .header-inner .burger-container ul li:nth-of-type(4) {
    right: 0;
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(1) {
    top: 50%;
    transform: translateY(-50%) rotate(45deg);
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(2) {
    top: 50%;
    transform: translateY(-50%) rotate(-45deg);
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(3) {
    left: -50%;
    opacity: 0;
  }
  header.header .header-inner .burger-container ul.active li:nth-of-type(4) {
    right: -50%;
    opacity: 0;
  }
  header.header .header-inner nav {
    display: none;
  }
  header.header .header-inner .heart-beelieve {
    display: none;
  }
}
@media screen and (max-width: 1024px) {
  .logo {
    max-width: 290px;
    width: 290px;
  }
}
@media screen and (max-width: 575px) {
  .mobile-menu-container .main-menu {
    gap: 30px;
  }
  .mobile-menu-container .main-menu li span {
    font-size: 24px !important;
  }
  .mobile-menu-container .main-menu .menu-item.menu-item-has-children .dropdown-toggle:after {
    top: 16%;
    right: 24%;
  }
}
@media screen and (max-width: 400px) {
  .mobile-menu-container .main-menu li span {
    font-size: 22px !important;
  }
}
.hero-content {
  position: relative;
  overflow: hidden;
  background-color: #feb62e;
}
.hero-content .hero-title {
  z-index: 10;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 7%;
  right: 0;
  opacity: 0;
  animation-name: fadeIn;
  animation-duration: 500ms;
  animation-delay: 50ms;
  animation-timing-function: linear;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}
.hero-content .hero-title .hero-title-inner {
  max-width: 612px;
  gap: 20px;
}
.hero-content .hero-title .hero-title-inner p {
  font-size: 24px;
  font-weight: 350;
  line-height: 34px;
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeInScale {
  from {
    opacity: 0;
    transform: scale(1.2);
  }
  to {
    opacity: 1;
    transform: scale(1);
  }
}
.hero-content .hero-image {
  transform-origin: center center;
  max-height: 710px;
  min-height: 710px;
  background-position: 85% 50%;
  background-repeat: no-repeat;
  background-size: cover;
  opacity: 0;
  animation-name: fadeInScale;
  animation-duration: 1000ms;
  animation-delay: 100ms;
  animation-timing-function: ease-in-out;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}

.news-events-hero .hero-title-inner {
  gap: 20px;
}

body.home .hero-content {
  background-color: white;
}
body.home .hero-content .hero-title .hero-title-inner {
  max-width: 505px;
  gap: 30px;
}
body.home .hero-content .hero-title .hero-title-inner h1 {
  color: white !important;
}
body.home .hero-content .hero-title .hero-title-inner h1 strong {
  color: white !important;
}

@media screen and (min-width: 1600px) {
  .hero-content .hero-image {
    background-position: top;
  }
  .hero-content .hero-papercut {
    margin-bottom: -60px;
  }
}
@media screen and (max-width: 575px) {
  .hero .hero-inner .hero-content .hero-image {
    max-height: 650px;
    min-height: 650px;
    background-position: 80%;
    opacity: 0.8;
    z-index: -1;
  }
  .hero .hero-inner .hero-content .hero-title {
    z-index: 1;
    bottom: 0 !important;
    background-color: rgba(255, 255, 255, 0.6);
  }
  .hero .hero-inner .hero-content .hero-title .hero-title-inner h1,
  .hero .hero-inner .hero-content .hero-title .hero-title-inner h1 strong {
    color: #2c237b !important;
  }
  .hero .hero-inner .hero-content .hero-title.hero-bounds {
    padding: 0 20px;
  }
}
@media screen and (max-width: 475px) {
  .hero-content .hero-title .hero-title-inner h1 {
    font-size: 50px;
    line-height: 65px;
  }
  .hero-content .hero-title .hero-title-inner h1 strong {
    font-size: 50px;
    line-height: 65px;
  }
}</style>