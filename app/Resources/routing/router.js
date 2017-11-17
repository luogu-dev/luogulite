import _ from 'lodash'

export class Router {
  constructor () {
    this.routingTable = _.merge(...arguments)
  }

  dispatch (route) {
    if (!(route in this.routingTable)) {
      throw new Error('Unable to route: undefined route')
    }

    this.routingTable[route]()
  }
}
