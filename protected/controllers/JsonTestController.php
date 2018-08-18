<?php

class JsonTestController extends Controller {

    public function actionIndex()
    {
        $request = Yii::app()->request;
        $contentType = $request->getContentType();

        if ($contentType !== 'application/json') {
            $response['status'] = 415;
        } else {
            $data = CJSON::decode(file_get_contents("php://input"));

            if (empty($data)) {
                $response['status'] = 400;
            } else {
                $model = new TestModel;
                // 把特定欄位轉換成model
                if (isset($data['children']) && is_array($data['children'])) {
                    $children = &$data['children'];
                    foreach ($children as $key => $value) {
                        $childrenModel = new ChildrenModel;
                        $childrenModel->setAttributes($value);
                        $children[$key] = $childrenModel;
                    }
                }
                $model->setAttributes($data);
                $valid = $model->validate();
                if ($valid) {
                    // do something
                    $response['status'] = 200;
                } else {
                    $response['status'] = 400;
                }
            }
        }

        header('HTTP/1.1 ' . $response['status']);
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}