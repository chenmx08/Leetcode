class Solution:
    def twoSum(self, nums: list, target: int) -> list:
        sort_num = sorted(nums)
        i = 0;
        j = len(nums) - 1
        while True:
            if i >= j :
                return []
            if sort_num[i] + sort_num[j] == target :
                if sort_num[j] == sort_num[i] :
                    a = nums.index(sort_num[i])
                    b = nums.index(sort_num[j], a + 1)
                else :
                    a = nums.index(sort_num[i])
                    b = nums.index(sort_num[j])
                return [a,b]
            if sort_num[i] + sort_num[j] > target :
                j -= 1
                continue
            if sort_num[i] + sort_num[j] < target :
                i += 1
                continue
           

a = Solution()
b = a.twoSum([-1,-2,-3,-4,-5],-8)
print(b)