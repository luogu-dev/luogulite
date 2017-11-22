import 'semantic.css'
import 'semantic'

import { Router } from 'routing/router'

import UserRoutingConfig from 'routing/config/user'
import ProblemRoutingConfig from 'routing/config/problem'
import AdminProblemRoutingConfig from 'routing/config/admin_problem'

const router = new Router(UserRoutingConfig, ProblemRoutingConfig, AdminProblemRoutingConfig)
router.dispatch(_globals.route)
