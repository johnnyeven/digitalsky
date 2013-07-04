function contentPicUpload(uploadId, contentId, valueId) {
	$.ajaxFileUpload
	(
		{
			url:'utils/doPicUpload?el=' + uploadId,
			secureuri:false,
			fileElementId:uploadId,
			dataType: 'json',
			data:{},
			success: function (data, status)
			{
				if(typeof(data.error) != 'undefined')
				{
					if(data.error != 'null')
					{
						alert(data.error);
					}
					else
					{
						alert(data.msg);
						$("#" + contentId).append("<p>" + data.data + "</p>");
						$("#" + valueId).val(data.data);
					}
				}
			},
			error: function (data, status, e) {
				alert(e);
			}
		}
	)
	return false;
}