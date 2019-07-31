# Definition for singly-linked list.
# class ListNode:
#     def __init__(self, x):
#         self.val = x
#         self.next = None

class Solution:
    def addTwoNumbers(self, l1 , l2 )  :
        res = ListNode(0)
        next = res
        add = 0
        while True :
            if l1 == None and l2 == None : 
                if add == 1 :
                    next.next = ListNode(1)
                break

            x = l1.val if l1 else 0 
            y = l2.val if l2 else 0
            count = x + y + add
            add = 1 if count >= 10 else 0
            next.next = ListNode(count%10)
            next = next.next
            l1 = l1.next if l1 != None else None
            l2 = l2.next if l2 != None else None
        return res.next
