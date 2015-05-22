<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/3/13 13:39
 * @Description:
 */

//基本状态
$items['status'][0] = '禁用';
$items['status'][1] = '启用';
//审核状态
$items['approveStatus'][0] = '待审核';
$items['approveStatus'][1] = '已发布';
//订单状态
$items['orderStatus'][0] = '待确认';
$items['orderStatus'][1] = '待发货';
$items['orderStatus'][2] = '配送中';
$items['orderStatus'][3] = '交易完成';
$items['orderStatus'][4] = '交易取消';
//黑名单订单状态
$items['orderHiddenStatus'][0] = '审核通过';
$items['orderHiddenStatus'][1] = '未审核';
$items['orderHiddenStatus'][2] = '审核未通过';
//订单评价状态
$items['evaluationStatus'][0] = '未评价';
$items['evaluationStatus'][1] = '买家已评';
$items['evaluationStatus'][2] = '卖家已评';
$items['evaluationStatus'][3] = '双方互评';
//订单投诉状态
$items['complaintStatus'][0] = '-';
$items['complaintStatus'][1] = '买家投诉';
$items['complaintStatus'][2] = '卖家投诉';
$items['complaintStatus'][3] = '处理完毕';

//订单超时状态
$items['overtimeStatus'][0] = '-';
$items['overtimeStatus'][1] = '已超时';
$items['overtimeStatus'][2] = '处理中';
$items['overtimeStatus'][3] = '已处理';

//处理状态handle
$items['handleStatus'][0] = '待处理';
$items['handleStatus'][1] = '已处理';
$items['handleStatus'][2] = '处理中';
//回复状态
$items['replyStatus'][0] = '未回复';
$items['replyStatus'][1] = '已回复';
//商品状态
$items['goodsStatus'][0] = '待编辑';
$items['goodsStatus'][1] = '下架';
$items['goodsStatus'][2] = '上架';

//用户角色
$items['userRole'][0] = '系统';
$items['userRole'][1] = '用户';
$items['userRole'][2] = '商户';
$items['userRole'][3] = '客服';
$items['userRole'][4] = 'carrier';
//用户状态
$items['userStatus'][1] = '正常';
$items['userStatus'][0] = '屏蔽';
//申请状态
$items['applyStatus'][0] = '待处理';
$items['applyStatus'][1] = '同意';
$items['applyStatus'][2] = '拒绝';
//申请类型
$items['applyType'][0] = '添加商品';

//星期
$items['week'][0] = '星期日';
$items['week'][1] = '星期一';
$items['week'][2] = '星期二';
$items['week'][3] = '星期三';
$items['week'][4] = '星期四';
$items['week'][5] = '星期五';
$items['week'][6] = '星期六';
//店铺状态
$items['shopStatus'][0] = '未审核';
$items['shopStatus'][1] = '正式营业';
$items['shopStatus'][2] = '暂停营业';
$items['shopStatus'][4] = '备选商户';
//店铺等级
$items['shopGrade'][0] = '未分级';
$items['shopGrade'][1] = 'A级';
$items['shopGrade'][2] = 'B级';
$items['shopGrade'][3] = 'C级';
$items['shopGrade'][4] = 'D级';

//黄页商户分类
$items['huangyeCategory'] = [1=>'快递小哥',2=>'家政洗衣',3=>'生活维修',4=>'常用电话'];
$items['rewardType'] = ['罚金', '补贴'];
$items['scoreLevel'] = [1=>'1分',2=>'2分',3=>'3分',4=>'4分',5=>'5分'];
$items['orderOperate'] = ['create'=>'创建订单','approve'=>'确认订单','ship'=>'发货','deliver'=>'送货完成','complete'=>'确认收货','cancel'=>'取消订单','change_hidden'=>'审核通过',];
//租房信息状态
$items['zufangStatus'][0] = '未审核';
$items['zufangStatus'][1] = '审核通过';
$items['zufangStatus'][2] = '已过期';

return $items;
