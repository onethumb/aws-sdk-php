<?php
// This file was auto-generated from sdk-root/src/data/cloudfront-keyvaluestore/2022-07-26/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>Amazon CloudFront KeyValueStore Service to View and Update Data in a KVS Resource</p>', 'operations' => [ 'DeleteKey' => '<p>Deletes the key value pair specified by the key.</p>', 'DescribeKeyValueStore' => '<p>Returns metadata information about Key Value Store.</p>', 'GetKey' => '<p>Returns a key value pair.</p>', 'ListKeys' => '<p>Returns a list of key value pairs.</p>', 'PutKey' => '<p>Creates a new key value pair or replaces the value of an existing key.</p>', 'UpdateKeys' => '<p>Puts or Deletes multiple key value pairs in a single, all-or-nothing operation.</p>', ], 'shapes' => [ 'AccessDeniedException' => [ 'base' => '<p>Access denied.</p>', 'refs' => [], ], 'ConflictException' => [ 'base' => '<p>Resource is not in expected state.</p>', 'refs' => [], ], 'DeleteKeyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteKeyRequestListItem' => [ 'base' => '<p>List item for keys to delete.</p>', 'refs' => [ 'DeleteKeyRequestsList$member' => NULL, ], ], 'DeleteKeyRequestsList' => [ 'base' => NULL, 'refs' => [ 'UpdateKeysRequest$Deletes' => '<p>List of keys to delete.</p>', ], ], 'DeleteKeyResponse' => [ 'base' => '<p>Metadata information about a Key Value Store.</p>', 'refs' => [], ], 'DescribeKeyValueStoreRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeKeyValueStoreResponse' => [ 'base' => '<p>Metadata information about a Key Value Store.</p>', 'refs' => [], ], 'Etag' => [ 'base' => NULL, 'refs' => [ 'DeleteKeyRequest$IfMatch' => '<p>The current version (ETag) of the Key Value Store that you are deleting keys from, which you can get using DescribeKeyValueStore.</p>', 'DeleteKeyResponse$ETag' => '<p>The current version identifier of the Key Value Store after the successful delete.</p>', 'DescribeKeyValueStoreResponse$ETag' => '<p>The version identifier for the current version of the Key Value Store.</p>', 'PutKeyRequest$IfMatch' => '<p>The current version (ETag) of the Key Value Store that you are putting keys into, which you can get using DescribeKeyValueStore.</p>', 'PutKeyResponse$ETag' => '<p>The current version identifier of the Key Value Store after the successful put.</p>', 'UpdateKeysRequest$IfMatch' => '<p>The current version (ETag) of the Key Value Store that you are updating keys of, which you can get using DescribeKeyValueStore.</p>', 'UpdateKeysResponse$ETag' => '<p>The current version identifier of the Key Value Store after the successful update.</p>', ], ], 'GetKeyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetKeyResponse' => [ 'base' => '<p>A key value pair.</p>', 'refs' => [], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'DeleteKeyResponse$ItemCount' => '<p>Number of key value pairs in the Key Value Store after the successful delete.</p>', 'DescribeKeyValueStoreResponse$ItemCount' => '<p>Number of key value pairs in the Key Value Store.</p>', 'GetKeyResponse$ItemCount' => '<p>Number of key value pairs in the Key Value Store.</p>', 'PutKeyResponse$ItemCount' => '<p>Number of key value pairs in the Key Value Store after the successful put.</p>', 'UpdateKeysResponse$ItemCount' => '<p>Number of key value pairs in the Key Value Store after the successful update.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>Internal server error.</p>', 'refs' => [], ], 'Key' => [ 'base' => NULL, 'refs' => [ 'DeleteKeyRequest$Key' => '<p>The key to delete.</p>', 'DeleteKeyRequestListItem$Key' => '<p>The key of the key value pair to be deleted.</p>', 'GetKeyRequest$Key' => '<p>The key to get.</p>', 'GetKeyResponse$Key' => '<p>The key of the key value pair.</p>', 'ListKeysResponseListItem$Key' => '<p>The key of the key value pair.</p>', 'PutKeyRequest$Key' => '<p>The key to put.</p>', 'PutKeyRequestListItem$Key' => '<p>The key of the key value pair list item to put.</p>', ], ], 'KvsARN' => [ 'base' => NULL, 'refs' => [ 'DeleteKeyRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'DescribeKeyValueStoreRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'DescribeKeyValueStoreResponse$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'GetKeyRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'ListKeysRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'PutKeyRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', 'UpdateKeysRequest$KvsARN' => '<p>The Amazon Resource Name (ARN) of the Key Value Store.</p>', ], ], 'ListKeysRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListKeysRequestMaxResultsInteger' => [ 'base' => NULL, 'refs' => [ 'ListKeysRequest$MaxResults' => '<p>Maximum number of results that are returned per call. The default is 10 and maximum allowed page is 50.</p>', ], ], 'ListKeysResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListKeysResponseList' => [ 'base' => NULL, 'refs' => [ 'ListKeysResponse$Items' => '<p>Key value pairs</p>', ], ], 'ListKeysResponseListItem' => [ 'base' => '<p>A key value pair.</p>', 'refs' => [ 'ListKeysResponseList$member' => NULL, ], ], 'Long' => [ 'base' => NULL, 'refs' => [ 'DeleteKeyResponse$TotalSizeInBytes' => '<p>Total size of the Key Value Store after the successful delete, in bytes.</p>', 'DescribeKeyValueStoreResponse$TotalSizeInBytes' => '<p>Total size of the Key Value Store in bytes.</p>', 'GetKeyResponse$TotalSizeInBytes' => '<p>Total size of the Key Value Store in bytes.</p>', 'PutKeyResponse$TotalSizeInBytes' => '<p>Total size of the Key Value Store after the successful put, in bytes.</p>', 'UpdateKeysResponse$TotalSizeInBytes' => '<p>Total size of the Key Value Store after the successful update, in bytes.</p>', ], ], 'PutKeyRequest' => [ 'base' => '<p>A key value pair.</p>', 'refs' => [], ], 'PutKeyRequestListItem' => [ 'base' => '<p>List item for key value pair to put.</p>', 'refs' => [ 'PutKeyRequestsList$member' => NULL, ], ], 'PutKeyRequestsList' => [ 'base' => NULL, 'refs' => [ 'UpdateKeysRequest$Puts' => '<p>List of key value pairs to put.</p>', ], ], 'PutKeyResponse' => [ 'base' => '<p>Metadata information about a Key Value Store.</p>', 'refs' => [], ], 'ResourceNotFoundException' => [ 'base' => '<p>Resource was not found.</p>', 'refs' => [], ], 'ServiceQuotaExceededException' => [ 'base' => '<p>Limit exceeded.</p>', 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'AccessDeniedException$Message' => NULL, 'ConflictException$Message' => NULL, 'InternalServerException$Message' => NULL, 'ListKeysRequest$NextToken' => '<p>If nextToken is returned in the response, there are more results available. Make the next call using the returned token to retrieve the next page.</p>', 'ListKeysResponse$NextToken' => '<p>If nextToken is returned in the response, there are more results available. Make the next call using the returned token to retrieve the next page.</p>', 'ResourceNotFoundException$Message' => NULL, 'ServiceQuotaExceededException$Message' => NULL, 'ValidationException$Message' => NULL, ], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'DescribeKeyValueStoreResponse$Created' => '<p>Date and time when the Key Value Store was created.</p>', 'DescribeKeyValueStoreResponse$LastModified' => '<p>Date and time when the key value pairs in the Key Value Store was last modified.</p>', ], ], 'UpdateKeysRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateKeysResponse' => [ 'base' => '<p>Metadata information about a Key Value Store.</p>', 'refs' => [], ], 'ValidationException' => [ 'base' => '<p>Validation failed.</p>', 'refs' => [], ], 'Value' => [ 'base' => NULL, 'refs' => [ 'GetKeyResponse$Value' => '<p>The value of the key value pair.</p>', 'ListKeysResponseListItem$Value' => '<p>The value of the key value pair.</p>', 'PutKeyRequest$Value' => '<p>The value to put.</p>', 'PutKeyRequestListItem$Value' => '<p>The value for the key value pair to put.</p>', ], ], ],];
