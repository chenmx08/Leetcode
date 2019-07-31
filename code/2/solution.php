/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {
    function addTwoNumbers($l1, $l2) {
        $t = $l1; // $t 是 $l1 的拷贝 已经设置了next 属性，这样就不需要 方案二 去指定next
        $k = 0; //记录进位

        do{
            $val = $t->val + $l2->val + $k; //计算对位 和
            $t->val = $val % 10;    // 记录一位到 链表
            $k = $val >= 10 ? 1 : 0; //记录 进位
            if (!$l2->next && !$t->next && $k) {
                $t->next = new ListNode(1); //记录最后一个进位
                break;
            }

            if ($t->next && !$l2->next) {
                $l2->next = new ListNode(0); 
            }

            if ($l2->next && !$t->next) {
                $t->next = new ListNode(0); 
            }

            $t = $t->next;
            $l2 = $l2->next;
        }while ($t);
            return $l1;
    }
}


class Solution
{
    function addTwoNumbers($l1, $l2)
    {
        $obj = null;
        $additional = 0;

        do {
            $value = $l1->val + $l2->val + $additional;
            if ($value < 10) {
                $additional = 0;
            } else {
                $value -= 10;
                $additional = 1;
            }

            $tmp_obj = new ListNode($value); //链表节点

            if (is_null($obj)) {
                $obj = $tmp_obj; //第一个节点
            } else {
                $next->next = $tmp_obj; //当前节点的下一个节点 指向
            }
            $next = $tmp_obj; //下一个节点，等于 当前节点

            $l1 = $l1->next;
            $l2 = $l2->next;

        } while ($l1 || $l2 || $additional);

        return $obj;
    }
}
