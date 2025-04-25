import face_recognition

try:
    known = face_recognition.load_image_file("images/reference.png")
    unknown = face_recognition.load_image_file("images/capture.png")

    known_enc = face_recognition.face_encodings(known)[0]
    unknown_enc = face_recognition.face_encodings(unknown)[0]

    result = face_recognition.compare_faces([known_enc], unknown_enc)

    print("MATCH" if result[0] else "NO_MATCH")
except Exception as e:
    print(f"ERROR: {e}")
