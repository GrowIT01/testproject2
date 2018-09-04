package mvc;

public class Mvc {

  public static void main(String[] args) {
    //fetch student record based on his roll no from the database
    Student model = retrive_student();

    //Create a view : to write student details on console
    StudentView view = new StudentView();

    StudentController controller = new StudentController(model, view);

    controller.updateView();

    //update model data
    controller.setStudentName("John");
    controller.setStudentRollNo("5");

    controller.updateView();
  }

  private static Student retrive_student() {
    Student student = new Student();
    student.setName("Robert");
    student.setRollNo("10");
    return student;
  }

}
