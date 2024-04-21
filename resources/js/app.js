import './bootstrap';


// Import our custom CSS
import '~resources/scss/app.scss'

import '~bootstrap/js/index.esm.js'

// precompilazioni immagini
import.meta.glob([
    '../img/**'
])