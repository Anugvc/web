# class Book:
#     def __init__(self,page):
#         self.page=page
#
#     def __str__(self):
#         return  str(self.page)
#     def __add__(self, other):
#         return Book(self.page+other.page)
#     def __sub__(self, other):
#         return self.page-other.page
#
# obj=Book(100)
# obj1=Book(200)
# obj2=Book(300)
# print(obj+obj1+obj2)
# class Emp:
#     com_name='ctc'
#     def __init__(self,age,name):
#         self.age=age
#         self.name=name
#     def __str__(self):
#         return