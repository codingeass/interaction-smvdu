/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package javaapplication17my;

import java.beans.PropertyChangeListener;
import java.beans.PropertyChangeSupport;
import java.io.Serializable;
import java.util.Date;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;
import javax.persistence.Transient;

/**
 *
 * @author Amandeep
 */
@Entity
@Table(name = "student", catalog = "interaction", schema = "")
@NamedQueries({
    @NamedQuery(name = "Student.findAll", query = "SELECT s FROM Student s"),
    @NamedQuery(name = "Student.findById", query = "SELECT s FROM Student s WHERE s.id = :id"),
    @NamedQuery(name = "Student.findByName", query = "SELECT s FROM Student s WHERE s.name = :name"),
    @NamedQuery(name = "Student.findBySex", query = "SELECT s FROM Student s WHERE s.sex = :sex"),
    @NamedQuery(name = "Student.findByEntryNo", query = "SELECT s FROM Student s WHERE s.entryNo = :entryNo"),
    @NamedQuery(name = "Student.findByBranch", query = "SELECT s FROM Student s WHERE s.branch = :branch"),
    @NamedQuery(name = "Student.findBySemester", query = "SELECT s FROM Student s WHERE s.semester = :semester"),
    @NamedQuery(name = "Student.findByDateOfBirth", query = "SELECT s FROM Student s WHERE s.dateOfBirth = :dateOfBirth"),
    @NamedQuery(name = "Student.findByDateOfJoining", query = "SELECT s FROM Student s WHERE s.dateOfJoining = :dateOfJoining"),
    @NamedQuery(name = "Student.findByAddress", query = "SELECT s FROM Student s WHERE s.address = :address"),
    @NamedQuery(name = "Student.findByContact", query = "SELECT s FROM Student s WHERE s.contact = :contact"),
    @NamedQuery(name = "Student.findByProject", query = "SELECT s FROM Student s WHERE s.project = :project"),
    @NamedQuery(name = "Student.findByAreaOfInterest", query = "SELECT s FROM Student s WHERE s.areaOfInterest = :areaOfInterest")})
public class Student implements Serializable {
    @Transient
    private PropertyChangeSupport changeSupport = new PropertyChangeSupport(this);
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "id")
    private Integer id;
    @Column(name = "name")
    private String name;
    @Column(name = "sex")
    private String sex;
    @Column(name = "entry_no")
    private String entryNo;
    @Column(name = "branch")
    private String branch;
    @Column(name = "semester")
    private Integer semester;
    @Column(name = "date_of_birth")
    @Temporal(TemporalType.DATE)
    private Date dateOfBirth;
    @Column(name = "date_of_joining")
    @Temporal(TemporalType.DATE)
    private Date dateOfJoining;
    @Column(name = "address")
    private String address;
    @Column(name = "contact")
    private String contact;
    @Column(name = "project")
    private String project;
    @Column(name = "area_of_interest")
    private String areaOfInterest;

    public Student() {
    }

    public Student(Integer id) {
        this.id = id;
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        Integer oldId = this.id;
        this.id = id;
        changeSupport.firePropertyChange("id", oldId, id);
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        String oldName = this.name;
        this.name = name;
        changeSupport.firePropertyChange("name", oldName, name);
    }

    public String getSex() {
        return sex;
    }

    public void setSex(String sex) {
        String oldSex = this.sex;
        this.sex = sex;
        changeSupport.firePropertyChange("sex", oldSex, sex);
    }

    public String getEntryNo() {
        return entryNo;
    }

    public void setEntryNo(String entryNo) {
        String oldEntryNo = this.entryNo;
        this.entryNo = entryNo;
        changeSupport.firePropertyChange("entryNo", oldEntryNo, entryNo);
    }

    public String getBranch() {
        return branch;
    }

    public void setBranch(String branch) {
        String oldBranch = this.branch;
        this.branch = branch;
        changeSupport.firePropertyChange("branch", oldBranch, branch);
    }

    public Integer getSemester() {
        return semester;
    }

    public void setSemester(Integer semester) {
        Integer oldSemester = this.semester;
        this.semester = semester;
        changeSupport.firePropertyChange("semester", oldSemester, semester);
    }

    public Date getDateOfBirth() {
        return dateOfBirth;
    }

    public void setDateOfBirth(Date dateOfBirth) {
        Date oldDateOfBirth = this.dateOfBirth;
        this.dateOfBirth = dateOfBirth;
        changeSupport.firePropertyChange("dateOfBirth", oldDateOfBirth, dateOfBirth);
    }

    public Date getDateOfJoining() {
        return dateOfJoining;
    }

    public void setDateOfJoining(Date dateOfJoining) {
        Date oldDateOfJoining = this.dateOfJoining;
        this.dateOfJoining = dateOfJoining;
        changeSupport.firePropertyChange("dateOfJoining", oldDateOfJoining, dateOfJoining);
    }

    public String getAddress() {
        return address;
    }

    public void setAddress(String address) {
        String oldAddress = this.address;
        this.address = address;
        changeSupport.firePropertyChange("address", oldAddress, address);
    }

    public String getContact() {
        return contact;
    }

    public void setContact(String contact) {
        String oldContact = this.contact;
        this.contact = contact;
        changeSupport.firePropertyChange("contact", oldContact, contact);
    }

    public String getProject() {
        return project;
    }

    public void setProject(String project) {
        String oldProject = this.project;
        this.project = project;
        changeSupport.firePropertyChange("project", oldProject, project);
    }

    public String getAreaOfInterest() {
        return areaOfInterest;
    }

    public void setAreaOfInterest(String areaOfInterest) {
        String oldAreaOfInterest = this.areaOfInterest;
        this.areaOfInterest = areaOfInterest;
        changeSupport.firePropertyChange("areaOfInterest", oldAreaOfInterest, areaOfInterest);
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Student)) {
            return false;
        }
        Student other = (Student) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "javaapplication17my.Student[ id=" + id + " ]";
    }

    public void addPropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.addPropertyChangeListener(listener);
    }

    public void removePropertyChangeListener(PropertyChangeListener listener) {
        changeSupport.removePropertyChangeListener(listener);
    }
    
}
