import 'semantic.css'
import 'semantic'

import { Router } from 'routing/router'

import UserRoutingConfig from 'routing/config/user'
import AdminProblemRoutingConfig from 'routing/config/admin_problem'

const router = new Router(UserRoutingConfig, AdminProblemRoutingConfig)
router.dispatch(_globals.route)
