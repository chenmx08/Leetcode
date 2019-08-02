class Solution:
    def lengthOfLongestSubstring(self, s: str) -> int:
        max = 0
        res = ''
        start = 0
        while start < len(s) :
            for i in range(start , len(s)) :
                if res.find(s[i]) != -1  :
                    max = len(res) if len(res) > max else max
                    res = ''
                    start += 1
                    break
                    if max > len(s)//2 and start > len(s)//2 : break
                else :
                    res = res +  s[i]
            if max > len(s)//2 and start > len(s)//2 : break
        return max 


class Solution:
    def lengthOfLongestSubstring(self, s: str) -> int:
        l = []
        res = []
        for x in s:
            if x not in l:
                l.append(x)
            else:
                res.append(len(l))
                i = l.index(x)
                l = l[i+1:]
                l.append(x)
        res.append(len(l))
        return max(res) if res else 0



a = Solution()
s = "abcabc"
print(a.lengthOfLongestSubstring(s))



