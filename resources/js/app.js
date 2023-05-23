import './bootstrap'

import BasicLoaderController from './controllers/basic_loader_controller'
import PictureInput from './vue/picture_input'
import SimpleMDEController from './controllers/simplemde_controller'

application.register('basic-loader-controller', BasicLoaderController)
application.register('picture-input', PictureInput)
application.register('simplemde', SimpleMDEController)
