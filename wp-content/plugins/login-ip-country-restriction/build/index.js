const licrSettingsProcessing = () =>{const wrap = document.querySelector('.licr-feature.tab-content-wrap');if (wrap){wrap.classList.add('processing');}};const initLICRSettings = () =>{const targets = document.querySelectorAll('.licr-feature.tabs-wrap a,.licr-feature.tab-content-wrap input[type="submit"]',);if (targets){[].forEach.call(targets,(item) =>{item.addEventListener('click',() =>{licrSettingsProcessing();});});}};/* eslint-disable-next-line */function licrGoToLetter(letter){const wrapper = document.getElementById('letter' + letter);if (wrapper){wrapper.scrollIntoView({behavior:'smooth',block:'start',inline:'nearest',});}}initLICRSettings();const toggleDebug = document.getElementById('sislrc-toggle-debug');const toggleDebugWrap = document.getElementById('sislrc-debug-ip');const togglers = document.querySelectorAll('.sislrc-toggle');const changes = document.querySelectorAll('[name^="_login_ip_country_restriction_settings[countries_filter"]');if (toggleDebug && toggleDebugWrap){toggleDebug.addEventListener('click',(event) =>{event.preventDefault();if (toggleDebugWrap.classList.contains('is-hidden')){toggleDebugWrap.classList.remove('is-hidden');}else{toggleDebugWrap.classList.add('is-hidden');}});}if (togglers){[].forEach.call(togglers,(item) =>{item.addEventListener('click',() =>{if (item.dataset.target){const target = document.getElementById(item.dataset.target.replace('#',''));const action = item.dataset.action;if (action === 'show'){target.classList.remove('is-hidden');}else if (action === 'hide'){target.classList.add('is-hidden');}else{/* eslint-disable-next-line */if (target.classList.contains('is-hidden')){target.classList.remove('is-hidden');}else{target.classList.add('is-hidden');}}}});});}if (changes){[].forEach.call(changes,(change) =>{change.addEventListener('change',() =>{const target = document.querySelector(`.letter${change.dataset.letter}`);if (target){target.classList.add('button-primary');}});});}