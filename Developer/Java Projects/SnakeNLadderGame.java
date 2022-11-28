while (I < 8) :
if (self.Level == '1' and I < 3) :
	if (Play_With_Computer.computerPosition == Play_With_Computer.Snake_Mouth_Position[I]) :
		print(" \n       -------->Computer Swallowed By Snake<---------")
	elif(Play_With_Computer.computerPosition == Play_With_Computer.Ladder_Down_Position[I]) :
		print(" \n       -------->Computer Climb Up The Ladder<-------")
elif(self.Level == '2' and I < 5) :
	if (Play_With_Computer.computerPosition == Play_With_Computer.Snake_Mouth_Position[I]) :
		print(" \n       -------->Computer Swallowed By Snake<---------")
	elif(Play_With_Computer.computerPosition == Play_With_Computer.Ladder_Down_Position[I]) :
		print(" \n       -------->Computer Climb Up The Ladder<-------")
else :
	if (Play_With_Computer.computerPosition == Play_With_Computer.Snake_Mouth_Position[I]) :
		print(" \n       -------->Computer Swallowed By Snake<---------")
	elif(Play_With_Computer.computerPosition == Play_With_Computer.Ladder_Down_Position[I]) :
		print(" \n       -------->Computer Climb Up The Ladder<-------")
I += 1