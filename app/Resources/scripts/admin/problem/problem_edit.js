import $ from 'jquery'

export default function () {
  function deleteTestcase (event) {
    event.preventDefault()

    const $button = $(this)
    const testcaseId = $button.attr('id').match(/problem_sampleTestcases_(\d+)_deleteTestcase/)[1]
    $(`#problem_sampleTestcases_${testcaseId}`).parent('div').remove()
  }

  $('#problem_newTestcase').click(event => {
    event.preventDefault()

    const $sampleTestcases = $('#problem_sampleTestcases')
    let widgetData = $sampleTestcases.attr('data-prototype')
    widgetData = widgetData.replace(/__name__label__/, _globals.sampleTestcasesCount)
    widgetData = widgetData.replace(/__name__/g, _globals.sampleTestcasesCount)

    $sampleTestcases.append(widgetData)
    $(`#problem_sampleTestcases_${_globals.sampleTestcasesCount}_deleteTestcase`).click(deleteTestcase)

    _globals.sampleTestcasesCount++
  })

  $('.problem_deleteTestcase').click(deleteTestcase)
}
