import 'semantic.css'
import 'semantic'

import { Router } from 'routing/router'

import UserRoutingConfig from 'routing/config/user'

const router = new Router(UserRoutingConfig)
router.dispatch(_globals.route)
