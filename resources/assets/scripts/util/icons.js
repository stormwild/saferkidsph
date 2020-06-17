import { library, dom } from '@fortawesome/fontawesome-svg-core';
import { faHeart, faEnvelope } from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faHeart, faEnvelope);
// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
