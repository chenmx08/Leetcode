class Solution:
    def findMedianSortedArrays(self, nums1, nums2):
        data = nums1 + nums2
        data.sort()
        length = len(data)
        if length/2 == length//2 :
            index1 = length//2
            index2 = index1 - 1
            res = (data[index1] + data[index2])/2
        else :
            index1 = length//2 
            res = data[index1]
        return float(res)

a = Solution()
b = a.findMedianSortedArrays([1,3],[2,4])
print(b)

        