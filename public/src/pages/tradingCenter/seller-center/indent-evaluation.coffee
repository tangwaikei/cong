
# 缓存DOM节点
$score = $('#score')
$content = $('#content')
$confirm = $('#confirm')

$ ->
	$confirm.bind 'click',addAppraise

addAppraise = (e)->

	if not ($content.val())
		alert("评价不能为空")
		return false

	data = 
		product_id:1
		score: 5
		content: $content.val()
	
	console.log data

	databus.addIndentAppraise data, (res)->
		if res.errCode == 0
			alert res.message
			window.location.href = '/trading-center/seller/product-detail?product_id=1'
			
		else 
			alert res.message

databus = 
	addIndentAppraise: (data, callback)->
		$.post "/evaluation/addEvaluation", data, (data)->
			callback data
	

